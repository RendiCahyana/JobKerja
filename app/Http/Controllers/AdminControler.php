<?php

namespace App\Http\Controllers;
use App\Models\model_job;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminControler extends Controller
{
    public function create()
    {
        $rute=route('store');
        return view('frontpage.editAdmin',compact('rute'));
    }
    public function store(Request $request)
    {
        // Validasi data


        // Validate the incoming request
        $request->validate([
            'nama_pekerjaan',
            'deskripsi',
            'gaji',
            'lokasi',
            'image',
        ]);

        $poto=$request->file('image');
        $nmpoto=time().$poto->getClientOriginalName();
        $poto->storeAs('asset/image',$nmpoto,'public');

        //create product
        model_job::create([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'gaji' => $request->gaji,
            'lokasi' => $request->lokasi,
            'image' => $nmpoto
        ]);

        return redirect()->route('kelolaAdmin')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model=model_job::find($id);
        $rute=route('update',$id);
        return view('frontpage.editAdmin',compact('rute','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'nama_pekerjaan',
            'deskripsi',
            'gaji',
            'lokasi',
            'image',
        ]);
        $model=model_job::find($id);

        //create product

        //get product by id
        $model=model_job::findOrFail($id);
       

        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload image
            $poto=$request->file('image');
            $nmpoto=time().$poto->getClientOriginalName();
            $poto->storeAs('asset/image', $nmpoto, 'public');
            //delete old image
            Storage::disk('public')->delete('asset/image'.$model->image);

        $model->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'gaji' => $request->gaji,
            'lokasi' => $request->lokasi,
            'image'=> $nmpoto
        ]);

    } else {
        //update product without image
        $model->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'gaji' => $request->gaji,
            'lokasi' => $request->lokasi,
        ]);
    }
        return redirect()->route('kelolaAdmin')->with(['success'=>'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $data=model_job::find($id);
       $data->delete();
       return redirect()->route('kelolaAdmin')->with(['success'=>'Data Berhasil Disimpan!']);
    }
    public function search_pekerjaan(Request $request)
    {
        $searchName = $request->input('search'); // Ambil input pencarian
        
        // Jika ada kata kunci pencarian, cari data hotel yang sesuai
        $data = model_job::where('nama_pekerjaan', 'like', '%'.$searchName.'%')->paginate(1); // Paginate hasil pencarian
        
        // Kirim hasil pencarian ke view
        return view('frontpage.kelolaAdmin', compact('data'));
    }
}
