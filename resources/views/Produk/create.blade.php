<x-app-layout>
    <x-layout>


        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Produk</h2>
        <form action="/produk" method="post">
            @csrf
            <div class="grid gap-2 sm:grid-cols-2 sm:gap-2">
                <div class="sm:col-span-1">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama">
                </div>
                <div class="w-full">
                    <label for="bahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan</label>
                    <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                </div>
                <!-- <div class="w-full">
                    <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                    <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                </div> -->
                <div class="mb-4">
            <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <select id="kategori_id" name="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                @foreach($kategori as $k)
                    <option value="{{ $k->id }}" {{ old('kategori_id') == $k->id ? 'selected' : '' }}>{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
                <div class="w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Gambar</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                </div>
                <div class="sm:col-span-2">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                    <textarea id="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tambah Deskripsi Disini" name="address" required>{{ old('address') }}</textarea>
                </div>

            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-amber-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-700 hover:bg-amber-600">
                Tambah Produk
            </button>
        </form>
    </x-layout>
</x-app-layout>