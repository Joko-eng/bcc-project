<x-app-layout>
    <x-layout>
        <?php
        // Ambil tanggal hari ini
        $today = date('Y-m-d');
        ?>

        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Artikel</h2>
        <form action="{{ route('Artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-2 sm:grid-cols-2 sm:gap-2">
                <div class="sm:col-span-1">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                </div>
                <div class="w-full">
                    <label for="tgl_published" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Publish</label>
                    <input type="date" name="tgl_published" id="tgl_published" value="<?php echo $today; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" oninput="updateDayOfWeek()" readonly>
                    <p id="dayOfWeek" class="mt-2 text-sm font-medium text-gray-900 dark:text-white"></p>
                </div>
                <div class="w-full">
                    <label for="nama_published" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Published</label>
                    <input type="text" name="nama_published" id="nama_published" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">
                </div>
                <div class="w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Gambar</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="gambar" name="gambar" type="file">
                </div>
                <div class="w-full">
                    <label for="konten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten</label>
                    <textarea name="konten" id="summernote" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-amber-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-700 hover:bg-amber-600">
                Tambah Artikel
            </button>
        </form>
        <script>
            $('#summernote').summernote({
                placeholder: 'Masukkan Konten ...',
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
            function updateDayOfWeek() {
                const input = document.getElementById('tgl_published');
                const dayOfWeekElement = document.getElementById('dayOfWeek');
                const date = new Date(input.value);

                const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const dayOfWeek = days[date.getUTCDay()];

                dayOfWeekElement.textContent = dayOfWeek ? `Hari: ${dayOfWeek}` : '';
            }

            // Panggil fungsi untuk menampilkan nama hari saat halaman dimuat pertama kali
            updateDayOfWeek();
        </script>
    </x-layout>
</x-app-layout>