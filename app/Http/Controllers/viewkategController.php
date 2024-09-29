<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class viewkategController extends Controller
{
    public function index(Request $request)
    {

        $query = Produk::with('kategoris');
        
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%{$search}%")
            ->orWhereHas('kategoris', function ($q) use ($search) {
                $q->where('nama_kategori', 'like', "%{$search}%");
            });
        }
        $kategoris = Kategori::with('produks')->get();
        $produks = $query->get();


        return view('kategori.index', compact('produks', 'kategoris'));
    }

    public function showByCategory($id)
    {
    
        // Fetch the category along with its products
        $kategori = Kategori::with('produks')->findOrFail($id);

        return view('kategori.show', compact('kategori'));
    }

}
