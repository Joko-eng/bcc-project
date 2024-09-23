<x-app-layout>
    <x-layout>
        @if (session()->has('success'))
            <div id="alert-2"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-2" aria-label="Close">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-3 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Artikel</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 p-4">
                
                {{-- search --}}
                <div class="flex items-center w-96">
                    <form class="flex-grow" action="{{ route('artikel.search') }}" method="GET">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-96">
                            <!-- SVG Icon Search -->
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <!-- Input Field -->
                            <input type="text" id="simple-search" name="query"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search" value="{{ request()->query('query') }}" required>
                        </div>
                    </form>
                </div>                       
                {{-- end search --}}

                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <!-- Dropdown Button -->
                    <div class="relative">
                        <button id="dropdownButton"
                            class="flex items-center justify-center text-white bg-amber-500 hover:bg-amber-400 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Actions
                            <svg class="h-4 w-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 6.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu"
                            class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-700 dark:border-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="/addartikel"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Create
                                        Data</a>
                                </li>
                                <li>
                                    <form action="{{ route('Artikel.deleteAll') }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Delete All Data
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-4 py-3">No</th>
                            <th scope="col" class="px-4 py-3">Judul</th>
                            <th scope="col" class="px-4 py-3">Konten</th>
                            <th scope="col" class="px-4 py-3">Tgl_Published</th>
                            <th scope="col" class="px-4 py-3">Nama_Published</th>
                            <th scope="col" class="px-4 py-3">Gambar</th>
                            <th scope="col" class="px-4 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $artikel)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $artikel->judul }}</td>
                                <td class="px-4 py-3">{{ $artikel->konten }}</td>
                                <td class="px-4 py-3">
                                    {{ \Carbon\Carbon::parse($artikel->tgl_published)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                                </td>
                                <td class="px-4 py-3">{{ $artikel->nama_published }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{ asset('upload/artikel/' . $artikel->gambar) }}" alt="Product Image"
                                        style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="actionsDropdownButton-{{ $artikel->id }}"
                                        data-dropdown-toggle="actionsDropdown-{{ $artikel->id }}"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700"
                                        type="button">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </button>

                                    <div id="actionsDropdown-{{ $artikel->id }}"
                                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="actionsDropdownButton-{{ $artikel->id }}">
                                            <li>
                                                <a href="{{ route('Artikel.edit', $artikel->id) }}"
                                                    class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{ route('Artikel.destroy', $artikel->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this article?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="block w-full text-left py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">
                        @if ($artikels->count())
                            <!-- Pastikan ada artikel sebelum mengakses metode -->
                            {{ $artikels->firstItem() }}-{{ $artikels->lastItem() }}
                        @else
                            0-0
                        @endif
                    </span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $artikels->total() }}</span>
                </span>

                <!-- Dynamic Pagination Links -->
                <div>
                    {{ $artikels->links() }} <!-- Menampilkan link navigasi halaman -->
                </div>
            </nav>

        </div>
        <script>
            $('form').on('submit', function(e) {
                var konten = $('#summernote').summernote('code');
                var textOnly = $('<div>').html(konten).text(); // Menghapus tag HTML
                $('#summernote').val(textOnly); // Set nilai textarea dengan teks yang sudah dibersihkan
            });
        </script>
        <script>
            document.getElementById('dropdownButton').addEventListener('click', function() {
                var dropdownMenu = document.getElementById('dropdownMenu');
                dropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown if click outside
            document.addEventListener('click', function(event) {
                var dropdownMenu = document.getElementById('dropdownMenu');
                if (!event.target.closest('#dropdownButton') && !event.target.closest('#dropdownMenu')) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        </script>
        <script>
            // silang x allert
            document.addEventListener('DOMContentLoaded', function() {
                // Temukan semua button dengan data-dismiss-target
                const dismissButtons = document.querySelectorAll('[data-dismiss-target]');

                dismissButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.getAttribute('data-dismiss-target');
                        const alertElement = document.querySelector(targetId);

                        if (alertElement) {
                            alertElement.classList.add(
                            'hidden'); // Tambah class hidden untuk menyembunyikan alert
                        }
                    });
                });
            });
        </script>
    </x-layout>
</x-app-layout>