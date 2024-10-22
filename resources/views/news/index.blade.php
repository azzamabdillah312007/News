<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-indigo-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Berita Terkini</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="hover:text-gray-300">Politik</a></li>
                    <li><a href="#" class="hover:text-gray-300">Teknologi</a></li>
                    <li><a href="#" class="hover:text-gray-300">Olahraga</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->

    <section class="container mx-auto mt-8 p-4">
        @foreach ($data['data'] as $news)
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center">
                    <img src="{{ $news['image']['small'] }}" alt="Berita Utama"
                        class="w-full md:w-1/2 rounded-lg md:mr-6">
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <h2 class="text-3xl font-bold text-indigo-500">{{ $news['title'] }}</h2>
                        <p class="text-gray-700 mt-4">Ini adalah ringkasan dari berita utama hari ini yang sedang
                           </p>
                        <a href="#"
                            class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                @break
        @endforeach
    </section>
    

    <!-- Latest News Section -->
    <section class="container mx-auto mt-8 p-4">
        <h2 class="text-2xl font-bold text-indigo-500 mb-4">Berita Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach ($data['data'] as $news)
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $news['image']['small'] }}" alt="Berita 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">{{ $news['title'] }}</h3>
                        <p class="text-gray-700 mt-2">Deskripsi singkat dari berita 1.</p>
                        <a href="#" class="text-indigo-500 hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach

            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Berita 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Berita 1</h3>
                    <p class="text-gray-700 mt-2">Deskripsi singkat dari berita 1.</p>
                    <a href="#" class="text-indigo-500 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Berita 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Berita 2</h3>
                    <p class="text-gray-700 mt-2">Deskripsi singkat dari berita 2.</p>
                    <a href="#" class="text-indigo-500 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/400x200" alt="Berita 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Judul Berita 3</h3>
                    <p class="text-gray-700 mt-2">Deskripsi singkat dari berita 3.</p>
                    <a href="#" class="text-indigo-500 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-500 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Berita Terkini. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>

</html>
