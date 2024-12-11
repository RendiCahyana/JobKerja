<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
    <div class="container p-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Tambah Pekerjaan</h1>
        <form action="{{ $rute }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="mb-4">
                <labpekerjaan" class="block">Nama Pekerjaan:</label>
                <input type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="w-full px-4 py-2 border" value="{{ old('nama_pekerjaan', $model->nama_pekerjaan ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="lokasi" class="block">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" class="w-full px-4 py-2 border" value="{{ old('lokasi', $model->lokasi ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="gaji" class="block">Gaji:</label>
                <input type="text" id="gaji" name="gaji" class="w-full px-4 py-2 border" value="{{ old('gaji', $model->gaji ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="image" class="block">Image:</label>
                <input type="file" id="image" name="image" class="w-full px-4 py-2 border" >
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi">{{ old('deskripsi', $model->deskripsi ?? '') }}</textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>