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


</head>

<body class="bg-gray-100">

    <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ url('images/logo.png') }}" class="h-14">
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col md:flex-row md:space-x-8 md:justify-center rtl:space-x-reverse">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Produk</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kategori</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Artikel</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang Kami</a>
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
    <div class="m-16 mx-20 max-w-screen-lg overflow-hidden rounded-xl border shadow-lg md:pl-8">
        <div class="flex flex-col overflow-hidden bg-white sm:flex-row md:h-80">
            <div class="order-first ml-auto h-full w-full bg-gray-700 sm:order-none sm:h-auto sm:w-1/2 lg:w-2/5">


                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('upload/produk/' . $produk->image1) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('upload/produk/' . $produk->image2) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        
                        <!-- Item 3 -->
                        @if($produk->image3)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('upload/produk/' . $produk->image3) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        @endif
                        <!-- Item 4 -->
                        @if($produk->image4)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('upload/produk/' . $produk->image4) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        @endif
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
            <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-3/5">
                <div class="mb-4 rounded-full bg-blue-800 py-0.5 px-4 border border-transparent text-xs text-white transition-all shadow-sm w-24 text-center">
                    {{$produk->kategoris->nama_kategori}}
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong> Bahan : </strong>{{ $produk->bahan }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong> Ukuran : </strong>{{ $produk->deskripsi }}</p>
                <div class="px-4 pt-2 pb-3">
                    <a href="#" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">
                        <a href="https://wa.me/6282131815153" target="_blank">Chat with us on WhatsApp</a>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Additional Features -->



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




    <style>
        /* CSS untuk menyembunyikan scrollbar */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</body>

</html>