<!-- job-details.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Konten Utama -->
    <x-home-layout>
    
        <h1 class="text-3xl font-bold mb-4">Detail Pekerjaan</h1>
        <div class="flex flex-col p-6">
            <div class="flex flex-col border border-black rounded-lg p-6 mb-2">
                <h2 class="text-2xl font-semibold mb-2">{{$data->nama_pekerjaan}}</h2>
                <p class="flex flex-wrap text-gray-700 mb-4">{{$data->deskripsi}}</p>
            </div>
        </div>
        <p class="text-gray-700">Jika Anda tertarik dengan posisi ini, silakan klik tombol 'Melamar' untuk memulai proses lamaran Anda.</p>
       
    </x-home-layout>
</body>
</html>
