<x-app-layout>
    <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>
        <h3 class="text-3xl font-bold dark:text-white px-4 lg:px-12">Dashboard</h3>

        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <div class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                    <div class="max-w-xs p-4 bg-blue-500 text-white rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 bg-white flex items-center justify-center">
                                <svg class="w-[44px] h-[44px] text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-lg font-medium">  Pengunjung</p>
                                <p class="text-sm">Hari Ini : {{ $totalVisitCount }}</p>
                                <p class="text-sm">Total : {{ $total }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs p-4 bg-yellow-400 text-white rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 bg-white flex items-center justify-center">
                                <svg class="w-[44px] h-[44px] text-yellow-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="ml-3">
                                <p class="text-lg font-medium">Total Produk</p>
                                <p class="text-sm"></p>
                                <p class="text-sm">Total : {{ $produkCount }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </x-layout>
</x-app-layout>