<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Bros Ring', 'Anting Anting', 'Gelang', 'Dompet', 'Ikat Pinggang', 'Home Decor'];

        foreach ($categories as $category) {
            Kategori::create([
                'nama_kategori' => $category,
            ]);
        }
    }
}
