<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $produks = Produk::with('kategoris')->get();
    return view('Produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debug request data
       //dd($request->all());
    
        $validatedData = $request->validate([
            'nama' => 'required',
            'bahan' => 'required',
            'deskripsi' => 'required|min:5|max:150',
            'kategori_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Proses penyimpanan produk
        $produk = new Produk();
        $produk->nama = $validatedData['nama'];
        $produk->bahan = $validatedData['bahan'];
        $produk->deskripsi = $validatedData['deskripsi'];
        $produk->kategori_id = $validatedData['kategori_id'];
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/produk'), $imageName);
            $produk->image = $imageName;
        }
    
        $produk->save();
    
        return redirect()->route('produk.index')->with('success', 'Produk ' . $validatedData['nama'] . ' Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
