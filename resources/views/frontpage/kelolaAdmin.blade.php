<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
    <div class="container p-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Dashboard Admin</h1>
        <a href="{{route('create')}}" class="px-4 py-2 text-white bg-blue-500 rounded">Tambah Lowongan Pekerjaan</a>
        <div class="relative w-2/3 max-w-md">
                    <form action="{{ route('search_pekerjaan') }}" method="GET" class="relative">
                        <input type="text" name="search" 
                            placeholder="Cari..."
                            class="w-full bg-gray-100 border border-gray-300 text-sm text-gray-700 py-2 pl-4 pr-10 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-purple-700">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

        <div class="mt-6">
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama Pekerjaan</th>
                        <th class="px-4 py-2 border">Deskripsi</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td class="px-4 py-2 border">{{ $item->id}}</td>
                            <td class="px-4 py-2 border">{{ $item->nama_pekerjaan }}</td>
                            <td class="px-4 py-2 border">{{ $item->deskripsi }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route ('edit', $item->id) }}" class="text-blue-500">Edit</a>
                                <a href="{{ route ('destroy', $item->id) }}" class="text-red-500" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="flex justify-end mt-4">
                <div class="inline-flex space-x-2 bg-gray-100 p-2 rounded-lg shadow-md">
                    {{ $data->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>