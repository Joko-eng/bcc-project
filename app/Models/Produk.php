<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'deskripsi',
        'bahan',
        'ukuran',
        'image1',
        'image2',
        'image3',
        'image4',
        'kategori_id'

    ];

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // public function createProduk(Request $request)
    // {
    //     // Validasi input
    //     $validatedData = $request->validate([
    //         'nama' => 'required',
    //         'bahan' => 'required',
    //         'ukuran' => 'required',
    //         'deskripsi' => 'required|min:5|max:150',
    //         'kategori_id' => 'required|integer',
    //         'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ]);
    //     $validatedData['nama'] = strtoupper($validatedData['nama']);

    //     // Proses penyimpanan produk
    //     $this->nama = $validatedData['nama'];
    //     $this->bahan = $validatedData['bahan'];
    //     $this->ukuran = $validatedData['ukuran'];
    //     $this->deskripsi = $validatedData['deskripsi'];
    //     $this->kategori_id = $validatedData['kategori_id'];

    //     // Proses penyimpanan gambar pertama
    //     if ($request->hasFile('image1')) {
    //         $image1 = $request->file('image1');
    //         $imageName1 = time() . '_1.' . $image1->getClientOriginalExtension();
    //         $image1->move(public_path('upload/produk'), $imageName1);
    //         $this->image1 = $imageName1;
    //     }

    //     // Proses penyimpanan gambar kedua
    //     if ($request->hasFile('image2')) {
    //         $image2 = $request->file('image2');
    //         $imageName2 = time() . '_2.' . $image2->getClientOriginalExtension();
    //         $image2->move(public_path('upload/produk'), $imageName2);
    //         $this->image2 = $imageName2;
    //     }

    //     // Proses penyimpanan gambar ketiga
    //     if ($request->hasFile('image3')) {
    //         $image3 = $request->file('image3');
    //         $imageName3 = time() . '_3.' . $image3->getClientOriginalExtension();
    //         $image3->move(public_path('upload/produk'), $imageName3);
    //         $this->image3 = $imageName3;
    //         Log::info('Image 3 uploaded successfully: ' . $imageName3);
    //     } else {
    //         Log::info('Image 3 not uploaded');
    //     }

    //     // Proses penyimpanan gambar keempat
    //     if ($request->hasFile('image4')) {
    //         $image4 = $request->file('image4');
    //         $imageName4 = time() . '_4.' . $image4->getClientOriginalExtension();
    //         $image4->move(public_path('upload/produk'), $imageName4);
    //         $this->image4 = $imageName4;
    //         Log::info('Image 4 uploaded successfully: ' . $imageName4);
    //     } else {
    //         Log::info('Image 4 not uploaded');
    //     }

    //     // Simpan produk ke database
    //     $this->save();

    //     // Kembalikan instance produk
    //     return $this;
    // }
    


    //Cara ke 2

    public function createProduk(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required',
            'bahan' => 'required',
            'ukuran' => 'required',
            'deskripsi' => 'required|min:5|max:150',
            'kategori_id' => 'required|integer',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $validatedData['nama'] = strtoupper($validatedData['nama']);
    
        // Buat instance baru dari model Produk
        $produk = new Produk();
        $produk->nama = $validatedData['nama'];
        $produk->bahan = $validatedData['bahan'];
        $produk->ukuran = $validatedData['ukuran'];
        $produk->deskripsi = $validatedData['deskripsi'];
        $produk->kategori_id = $validatedData['kategori_id'];
    
        // Proses penyimpanan gambar pertama
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '_1.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('upload/produk'), $imageName1);
            $produk->image1 = $imageName1;
        }
    
        // Proses penyimpanan gambar kedua
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '_2.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('upload/produk'), $imageName2);
            $produk->image2 = $imageName2;
        }
    
        // Proses penyimpanan gambar ketiga
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '_3.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('upload/produk'), $imageName3);
            $produk->image3 = $imageName3;
            Log::info('Image 3 uploaded successfully: ' . $imageName3);
        } else {
            Log::info('Image 3 not uploaded');
        }
    
        // Proses penyimpanan gambar keempat
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $imageName4 = time() . '_4.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('upload/produk'), $imageName4);
            $produk->image4 = $imageName4;
            Log::info('Image 4 uploaded successfully: ' . $imageName4);
        } else {
            Log::info('Image 4 not uploaded');
        }
    
        // Simpan produk ke database
        $produk->save();
    
        // Kembalikan instance produk
        return $produk;
    }
    

}
