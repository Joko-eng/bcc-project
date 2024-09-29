<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blimbingsari Creative Craft</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body class="bg-gray-100">

    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.png" class="h-14">
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col md:flex-row md:space-x-8 md:justify-center rtl:space-x-reverse">
                    <li>
                        <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/kategori" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kategori</a>
                    </li>
                    <li>
                        <a href="" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
                    </li>
                    <li>
                        <a href="#tentang-kami" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <!-- Dropdown Multilanguage -->
            <div class="relative ml-12">
                <button id="languageDropdown" data-dropdown-toggle="languageDropdownMenu" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    Indonesia
                    <svg class="w-4 h-4 inline ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 8l4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="languageDropdownMenu" class="absolute hidden right-0 z-10 w-32 bg-white rounded-lg shadow-lg">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 dark:bg-gray-800">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">English</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section class="bg-gray-50 py-5 antialiased dark:bg-gray-900 md:py-16">
    <form action="{{ route('index') }}" method="GET" class="mb-2 max-w-md mx-auto">
        <div class="flex items-center">
            <input type="text" name="search" placeholder="Cari Produk..." value="{{ request()->query('search') }}" class="border border-gray-300 rounded-lg py-2 px-4 w-full">
            <button type="submit" class="ml-2 inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Cari
            </button>
        </div>
    </form>
</section>

<div class="container mx-auto p-4">
    <div class="grid grid-cols-9 gap-4">
        @foreach ($kategoris as $kategori)
            <a href="{{ route('kategori.show', ['id' => $kategori->id]) }}" class="border border-gray-300 rounded-lg p-2 hover:shadow-md transition-shadow duration-300 ease-in-out">
                <h3 class="text-base font-medium text-gray-900 dark:text-white text-center">{{ $kategori->nama_kategori }}</h3>
            </a>
        @endforeach
    </div>
</div>
<div class="container mx-auto p-4">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
        @foreach ($produks as $produk)
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all transform hover:scale-105 hover:shadow-2xl hover:-translate-y-1 hover:bg-gray-50 duration-300 ease-out">
                <a href="#">
                    <img class="rounded-t-lg w-full h-32 object-cover" src="{{ asset('upload/produk/' . $produk->image1) }}" alt="" />
                </a>
                <div class="p-3">
                    <div class="mb-2 rounded-full bg-blue-800 py-0.5 px-3 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-start">
                        {{$produk->kategoris->nama_kategori}}
                    </div>
                    <a href="#">
                        <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}</h2>
                    </a>
                    <br>
                    <a href="{{ route('produk.show', ['id' => Crypt::encryptString($produk->id)]) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-1 px-2 rounded">
                        <i class="fa fa-shopping-cart"></i> Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <style>
        #produk .grid {
            display: grid;
            /* Create a responsive grid layout */
            gap: 1rem;
            /* Set a gap between grid items */
        }

        #produk .bg-white {
            background-color: #ffffff;
            /* Set background color for the cards */
        }

        #produk .text-lg {
            font-size: 1rem;
            /* Adjust the font size for the product name */
        }

        #produk .rounded-t-lg {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        #produk .h-40 {
            height: 10rem;
            /* Adjust the height of the images */
        }

        #produk .object-cover {
            object-fit: cover;
            /* Ensure the image covers the entire container */
        }
    </style>

    <footer class=" w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Develope By Poliwangi</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>