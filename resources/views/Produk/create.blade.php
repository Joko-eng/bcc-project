<x-app-layout>
    <x-layout>
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Produk</h2>
        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-2 sm:grid-cols-2 sm:gap-2">
                <div class="sm:col-span-1">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required>
                </div>
                <div class="w-full">
                    <label for="bahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan</label>
                    <input type="text" name="bahan" id="bahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                <div class="w-full">
                    <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                    <input type="text" name="ukuran" id="ukuran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                </div>
                <div class="mb-4">
                    <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                    <select id="kategori_id" name="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @foreach($kategori as $k)
                        <option value="{{ $k->id }}" {{ old('kategori_id') == $k->id ? 'selected' : '' }}>{{ $k->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image1">Gambar Produk 1:</label>
                    <input type="file" name="image1" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image2">Gambar Produk 2:</label>
                    <input type="file" name="image2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image2">Gambar Produk 3:</label>
                    <input type="file" name="image3" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image2">Gambar Produk 4:</label>
                    <input type="file" name="image4" class="form-control">
                </div>
                <div class="sm:col-span-2">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                    <textarea id="deskripsi" name="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tambah Deskripsi Disini" required></textarea>
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-amber-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-700 hover:bg-amber-600">
                Tambah Produk
            </button>
        </form>
    </x-layout>
</x-app-layout>