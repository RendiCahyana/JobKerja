<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melamar Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Konten Utama -->
    <x-home-layout>
        <h1 class="text-3xl font-bold mb-4">Melamar Pekerjaan</h1>
        <form class="bg-white p-6 shadow rounded">
            <div class="mb-4">
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" class="w-full border-gray-300 rounded p-2" placeholder="Nama Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" class="w-full border-gray-300 rounded p-2" placeholder="Email Anda">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Pilihan Pekerjaan</label>
                <div class="flex items-center mb-2">
                    <input type="radio" id="software-engineer" name="job" value="Software Engineer" class="mr-2">
                    <label for="software-engineer" class="text-gray-700">Software Engineer</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="product-manager" name="job" value="Product Manager" class="mr-2">
                    <label for="product-manager" class="text-gray-700">Product Manager</label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Berkas</label>
                <input type="file" class="w-full border-gray-300 rounded p-2">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim</button>
        </form>
    </x-home-layout>
</body>
</html>
