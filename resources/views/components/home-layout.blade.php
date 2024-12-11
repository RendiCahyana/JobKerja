<!-- index.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Portal Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.html" class="text-lg font-semibold">Portal Pekerjaan</a>
        <div class="space-x-4">
            <!-- Input pencarian yang sudah diperbaiki -->
            <div class="relative w-2/3 max-w-md">
                    <form action="{{ route('search') }}" method="GET" class="relative">
                        <input type="text" name="search" 
                            placeholder="Cari..."
                            class="w-full bg-gray-100 border border-gray-300 text-sm text-gray-700 py-2 pl-4 pr-10 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-purple-700">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

            <a href="{{route('landing')}}" class="hover:underline">Beranda</a>
            <a href="{{route('form')}}" class="hover:underline">Melamar</a>
            <a href="{{route('company')}}" class="hover:underline">Profil Perusahaan</a>
        </div>
    </div>
</nav>


    <!-- Konten Utama -->
    <div class="container mx-auto my-12">
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Portal Pekerjaan. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>