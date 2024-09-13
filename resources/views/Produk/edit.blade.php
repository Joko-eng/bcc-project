<x-app-layout>
        <x-layout>
                <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

                @if (session('success'))
                <div class="bg-green-500 text-white p-4 mb-4">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700">Nama:</label>
                        <input type="text" id="nama" name="nama" value="{{ $produk->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="bahan" class="block text-gray-700">Bahan:</label>
                        <input type="text" id="bahan" name="bahan" value="{{ $produk->bahan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block text-gray-700">Deskripsi:</label>
                        <textarea id="deskripsi" name="deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $produk->deskripsi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="kategori_id" class="block text-gray-700">Kategori:</label>
                        <select id="kategori_id" name="kategori_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach($kategori as $kat)
                            <option value="{{ $kat->id }}" {{ $kat->id == $produk->kategori_id ? 'selected' : '' }}>{{ $kat->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Gambar:</label>
                        <input type="file" id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <img src="{{ asset('upload/produk/' . $produk->image) }}" alt="Produk Image" class="mt-2">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Produk</button>
                    </div>
                </form>
        </x-layout>
</x-app-layout>