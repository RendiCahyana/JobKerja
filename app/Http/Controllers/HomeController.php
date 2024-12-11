<?php

namespace App\Http\Controllers;
use App\Models\model_job;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data=model_job::all();
        return view("frontpage.landingpage",compact('data'));
    }

    public function detail($id) {
        $data = model_job::findOrFail($id); // Ambil data berdasarkan ID
        return view('frontpage.detail', compact('data'));
    }

    function form(){
        return view("frontpage.form");
    }

    function company(){
        return view("frontpage.company");
    }

    function kelolaAdmin(){
        $data=model_job::paginate(2);
        return view("frontpage.kelolaAdmin",compact('data'));
    }

    function editAdmin(){
        return view("frontpage.editAdmin");
    }
    public function search(Request $request)
    {
        $searchName = $request->input('search'); // Ambil input pencarian
        
        // Jika ada kata kunci pencarian, cari data hotel yang sesuai
        $data = model_job::where('nama_pekerjaan', 'like', '%'.$searchName.'%')->paginate(1); // Paginate hasil pencarian
        
        // Kirim hasil pencarian ke view
        return view('frontpage.landingpage', compact('data'));
    }

    //
}
