<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Visitor;
use Carbon\Carbon;

use Illuminate\Http\Request;



    /**
     * Show the form for creating a new resource.
     */

     class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function countVisitor()
    {
        // Retrieve the current visitor count
        $visitor = Visitor::first();

        // If no visitor data exists, create a new record
        if (!$visitor) {
            $visitor = Visitor::create(['counts' => 1]);
        } else {
            // Increment the visitor count
            $visitor->increment('counts');
        }

        // Return the updated count to be passed to the view
        return $visitor->counts;
    }

    public function index()
    {
        // Get the visitor count
        $visitorCount = $this->countVisitor(); 

        // Retrieve produk and artikel data
        $produks = Produk::with('kategoris')->get();
        $artikels = Artikel::all();

        // Pass the visitor count, produk, and artikel data to the view
        return view('welcome', compact('produks', 'artikels', 'visitorCount'));
    }


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
