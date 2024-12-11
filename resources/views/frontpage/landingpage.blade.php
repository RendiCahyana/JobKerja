<!-- index.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Portal Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Konten Utama -->
    <x-home-layout>
        <h1 class="text-3xl font-bold text-center mb-4">Selamat Datang di Portal Pekerjaan</h1>
        <p class="text-center text-gray-700">Temukan pekerjaan impian Anda di sini dan ambil langkah selanjutnya dalam karier Anda.</p>

        <!-- Container untuk Card -->
        <div class="flex flex-wrap justify-center gap-4 mt-8 ">
        @foreach ($data as $item)
        
            <!-- Card 1 -->
            <div class="max-w-xs bg-white rounded-lg shadow-md overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{asset($item->path.$item->image)}}" alt="Foto Pekerjaan 1">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{$item->nama_pekerjaan}}</h2>
                    <h2 class="text-lg font-semibold text-gray-800">Gaji: {{$item->gaji}}</h2>
                    <a href="{{ route('detail.show', $item->id) }}" class="mt-5 w-full bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">Show Job</a>
                </div>
            </div>
      
        @endforeach
        </div>
    </x-home-layout>
</body>

</html>
