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
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Beranda</a>
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

    <!-- Hero Section -->
    <section class="relative bg-green-200 text-white flex items-center min-h-screen">
        <div class="absolute inset-0 overflow-hidden">
            <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-100">
                <source src="/video/Profile BCC.mp4" type="video/mp4">
                <!-- Add more video sources if needed to support various video formats -->
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black to-transparent opacity-70"></div>
        </div>

        <div class="relative container mx-auto px-6 py-32 text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Explore Banyuwangi's Charm with Our Exclusive, Handcrafted Souvenirs Reflecting the Region's Unique Culture and Craftsmanship.
            </h1>
        </div>
    </section>



    <div class="container mx-auto px-6 py-12" id="produk">
        <!-- Our Categories -->
        <section class="container mx-auto px-6 py-3">
            <h2 class="text-3xl font-bold mb-2 text-center">Katalog Produk Blimbingsari Creative Craft</h2>
            <div id="categories">
                <!-- Kategori cards will be loaded here -->
            </div>
        </section>
        <div class="flex overflow-x-auto space-x-4 -mx-2">
            @foreach ($produks as $produk)
            <div class="max-w-sm flex-shrink-0 w-30 sm:w-48 md:w-50 lg:w-70 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all transform hover:scale-105 hover:shadow-2xl hover:-translate-y-1 hover:bg-gray-50 duration-300 ease-out">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('upload/produk/' . $produk->image1) }}" alt="" />
                </a>
                <div class="p-5">
                    <div class="mb-4 rounded-full bg-blue-800 py-0.5 px-5 border border-transparent text-xs text-white transition-all shadow-sm w-24 text-start">
                        {{$produk->kategoris->nama_kategori}}
                    </div>
                    <a href="#">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}</h2>
                    </a>
                    <br>
                    <a href="/produk/{{ $produk->id }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                        <i class="fa fa-shopping-cart"></i> Detail Produk
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>


    <div class="mt-5 text-center">
        <button onclick="scrollRight()" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
            Lihat Semua
        </button>
    </div>

    <script>
        function scrollRight() {
            const container = document.querySelector('.overflow-x-auto');
            container.scrollBy({
                left: container.offsetWidth,
                behavior: 'smooth'
            });
        }
    </script>
    <style>
        #produk .flex {
            display: flex;
            /* Use flexbox for the container */
            gap: 1rem;
            /* Set a gap between flex items */
        }

        #produk .overflow-x-auto {
            overflow-x: auto;
            /* Allow horizontal scrolling */
            padding-left: 0.5rem;
            /* Adjust padding for the container */
            padding-right: 0.5rem;
            /* Adjust padding for the container */
        }

        #produk .max-w-sm {
            width: 300px;
            /* Set a fixed width */
        }

        #produk .flex-shrink-0 {
            flex-shrink: 0;
            /* Prevent flex items from shrinking */
        }

        #produk .rounded-t-lg {
            border-top-left-radius: 0.5rem;
            /* Adjust border radius */
            border-top-right-radius: 0.5rem;
            /* Adjust border radius */
        }

        #produk .w-full {
            width: 100%;
            /* Make the image take full width of the container */
        }

        #produk .h-48 {
            height: 12rem;
            /* Set a fixed height for the images */
        }

        #produk .object-cover {
            object-fit: cover;
            /* Ensure the images cover the entire area */
        }

        #produk .flex-col {
            display: flex;
            /* Use flexbox for column layout */
            flex-direction: column;
            /* Arrange items in a column */
        }

        #produk .flex-grow {
            flex-grow: 1;
            /* Allow the description to take available space */
        }

        #produk .mt-auto {
            margin-top: auto;
            /* Push the button to the bottom */
        }
    </style>
    </div>

    </div>






    <!-- Berita Start -->
    <div class="container mx-auto px-6 py-2">

        <section class="py-24 bg-gray-100">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-gray-900 text-center mb-10">Berita dan Artikel</h2>
                <div class="container col-xxl-10 py-2 flex flex-wrap justify-center gap-6">
                    <!-- Card 1 -->
                    @foreach ($artikels as $artikel)
                    <div
                        class="flex flex-col max-w-xs w-full bg-white border border-gray-300 rounded-2xl shadow-lg transition-all transform hover:scale-105 hover:shadow-2xl hover:-translate-y-1 hover:bg-gray-50 duration-300 ease-out">
                        <div class="card bg-white border-2 overflow-hidden rounded-t-2xl">
                            <!-- Image with zoom effect -->
                            <div class="overflow-hidden rounded-t-lg">
                                <img src="{{ asset('upload/artikel/' . $artikel->gambar) }}"
                                    class="img-fluid rounded-t-lg transform transition-transform duration-500 hover:scale-110">
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-indigo-600 font-medium mb-2 block">
                                {{ \Carbon\Carbon::parse($artikel->tgl_published)->locale('id')->isoFormat('D MMMM, YYYY') }}
                            </span>
                            <h4 class="text-xl text-gray-900 font-semibold leading-6 mb-3">{{ $artikel->judul }}</h4>
                            <p class="text-gray-600 leading-6 mb-4">{{ Str::limit($artikel->deskripsi, 100) }}</p>
                            <a href="{{ route('Artikel.detail', $artikel->id) }}"
                                class="text-lg text-indigo-600 font-semibold hover:underline">Read more</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Card Start -->

    </div>
    <!-- Berita End -->
    <!-- Galeri -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6 text-center">Kerjasama Blimbingsari Creative Craft</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Testimonials -->
    <section class="bg-green-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6 text-center">Video Profile Blimbingsari Creative Craft</h2>
            <div class="flex flex-wrap -mx-4 justify-center">
                <iframe class="border rounded-lg" width="760" height="415" src="https://www.youtube.com/embed/0E4aRguHzDE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="https://info.flagcounter.com/sZOS">
                <img src="https://s11.flagcounter.com/count2/sZOS/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                <p>{{ $visitorCount }}</p>
        </div>
    </section>



    <!-- Additional Features -->
    </div>
    <section id="tentang-kami" class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Tentang Kami -->
            <div class="formkanan">
                <div class="relative">
                    <h1 class="text-2xl font-bold">Tentang Kami</h1>
                    <h3 class="text-xl mt-3 text-justify">
                        BCC Pusat Oleh-Oleh Blimbingsari adalah destinasi utama untuk membeli oleh-oleh khas Banyuwangi. Terletak di pusat kota, kami menyediakan berbagai produk berkualitas seperti makanan tradisional, kerajinan tangan, dan produk lokal.
                        Kami berkomitmen untuk memberikan pengalaman berbelanja yang menyenangkan dengan layanan pelanggan yang ramah dan produk yang mencerminkan kekayaan budaya Banyuwangi. Dengan mendukung pengrajin lokal, kami berharap dapat meningkatkan kesejahteraan masyarakat sekitar dan menyajikan produk yang membawa cerita dari daerah ini.
                    </h3>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="formkiri">
                <div class="relative">
                    <iframe class="border rounded-lg" width="100%" height="315" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.33625686923!2d114.3413848!3d-8.3152265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd159e522dec657%3A0xd61e95a28bbe7b46!2sBCC%20PUSAT%20OLEH-OLEH%20BANYUWANGI!5e0!3m2!1sen!2sid!4v1642993133787!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

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

        html {
            scroll-behavior: smooth;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>