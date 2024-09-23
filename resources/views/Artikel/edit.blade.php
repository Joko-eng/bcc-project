<x-app-layout>
    <x-layout>
        <h1 class="text-2xl font-bold mb-4">Edit Artikel</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('Artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ $artikel->judul }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="konten" class="block text-gray-700">Konten:</label>
                <textarea name="konten" id="summernote"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $artikel->konten }}</textarea>
            </div>
            <div class="w-full">
                <label for="tgl_published" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Publish</label>
                <input type="text" name="tgl_published" id="tgl_published"
                    value="{{ old('tgl_published',\Carbon\Carbon::parse($artikel->tgl_published)->locale('id')->isoFormat('dddd, D MMMM YYYY')) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Hari, Tanggal/Bulan/Tahun" readonly>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar:</label>
                <input type="file" id="gambar" name="gambar"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <img src="{{ asset('upload/artikel/' . $artikel->gambar) }}" alt="Artikel Image" class="mt-2">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
                    Artikel</button>
            </div>
        </form>
        <script>
            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
        <script>
            $('form').on('submit', function(e) {
                var konten = $('#summernote').summernote('code');
                var textOnly = $('<div>').html(konten).text();
                $('#summernote').val(textOnly);
            });
        </script>
    </x-layout>
</x-app-layout>