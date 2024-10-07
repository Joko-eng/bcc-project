<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blimbingsari Creative Craft</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
        <div class="container mx-auto px-6 py-12" id="produk">
            <!-- Our Categories -->
            <section class="container mx-auto px-6 py-3">
                <h2 class="text-3xl font-bold mb-2 text-center">@lang('message.catalog')</h2>
                <div id="categories">
                    <!-- Kategori cards will be loaded here -->
                </div>
            </section>
            <div class="flex overflow-x-auto space-x-4 -mx-2 overflow-hidden no-scrollbar">
                @foreach ($produks as $produk)
                    <div
                        class="max-w-xs flex-shrink-0 w-41 sm:w-48 md:w-44 lg:w-[250px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-36 object-cover"
                                src="{{ asset('upload/produk/' . $produk->image1) }}" alt="{{ $produk->nama }}" />
                        </a>
                        <div class="p-3">
                            <div
                                class="mb-4 rounded-full w-auto bg-blue-800 py-0.5 px-2 border border-transparent text-xs text-white transition-all shadow-sm text-center">
                                {{ $produk->kategori_translated ?? $produk->kategoris->nama_kategori }}
                            </div>
                            <a href="#">
                                <h2 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $produk->nama_translated ?? $produk->nama }}</h2>
                            </a>
                            <br>
                            <a href="{{ route('produk.show', ['id' => Crypt::encryptString($produk->id)]) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                        <i class="fa fa-shopping-cart"></i> Detail Produk
                    </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>


    <div class="mt-5 text-center">
        <button onclick="scrollRight()" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
            Lihat Semua
        </button>
    </div>

    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
  <div class="relative p-2.5 h-96 overflow-hidden rounded-xl bg-clip-border">
    <img
      src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
      alt="card-image"
      class="h-full w-full object-cover rounded-md"
    />
  </div>
  <div class="p-4">
    <div class="mb-2 flex items-center justify-between">
      <p class="text-slate-800 text-xl font-semibold">
        Apple AirPods
      </p>
      <p class="text-cyan-600 text-xl font-semibold">
        $95.00
      </p>
    </div>
    <p class="text-slate-600 leading-normal font-light">
      With plenty of talk and listen time, voice-activated Siri access, and
      an available wireless charging case.
    </p>
    <button class="rounded-md w-full mt-6 bg-cyan-600 py-2 px-4 border border-0 text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700 focus:shadow-none active:bg-cyan-700 hover:bg-cyan-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Add to Cart
    </button>
  </div>
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



    <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
  <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
    <div class="flex items-center">
      <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
          <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
          <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
        </svg>
      </div>
      <div>
        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">3.4k</h5>
        <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week</p>
      </div>
    </div>
    <div>
      <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
        </svg>
        42.5%
      </span>
    </div>
  </div>

  <div class="grid grid-cols-2">
    <dl class="flex items-center">
        <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money spent:</dt>
        <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
    </dl>
    <dl class="flex items-center justify-end">
        <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Conversion rate:</dt>
        <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
    </dl>
  </div>

  <div id="column-chart"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="lastDaysdropdown"
          data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 7 days
          <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
              </li>
            </ul>
        </div>
        <a
          href="#"
          class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
          Leads Report
          <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </a>
      </div>
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

            <div class="bg-white p-4 rounded-lg shadow-md max-w-xs w-40">
                <h2 class="text-lg font-semibold mb-2">Pengunjung</h2>
                <div class="flex items-center mb-2">
                    <img src="https://www.countryflags.com/wp-content/uploads/indonesia-flag-png-large.png" alt="Indonesia Flag" class="w-6 h-4 mr-2">
                    <span>ID</span>
                    <span class="ml-2 font-semibold"></span>
                </div>
                <div class="mb-2">
                    <span>Hari ini : {{ $totalVisitCount }}</span>
                    <span class="font-semibold"></span>

                </div>
                <div class="mb-2">
                    <span> Total : {{ $total }}</span>
                    <span class="font-semibold"></span>
                </div>

            </div>
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