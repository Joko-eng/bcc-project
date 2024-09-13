<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Produk;
use App\Models\Kategori;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produks = Produk::with('kategoris')->get();
        $artikels = Artikel::all();
        return view('welcome', compact('produks', 'artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk, $id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all(); // Jika Anda perlu mengirim kategori ke view
        return view('detail', compact('produk', 'kategori'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
