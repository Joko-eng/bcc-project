<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

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
    public function index()
    {
        $today = Carbon::today()->toDateString();

        $visitors = Visitor::all();
        $totalVisitCount = Visitor::where('date', $today)->sum('visit_count');
        $total = Visitor ::count();

        // Retrieve produk and artikel data
        $produks = Produk::with('kategoris')->get();
        $artikels = Artikel::all();

        // Pass the visitor count, produk, and artikel data to the view
        return view('welcome', compact('produks', 'artikels', 'visitors', 'totalVisitCount', 'total'));
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
    public function show($encryptedId)
    {
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
            abort(404, 'Invalid encrypted ID');
        }

        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all(); // Jika Anda perlu mengirim kategori ke view
        return view('detail', compact('produk', 'kategori'));
    }
    public function show1(Artikel $artikel, $id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('Artikel.detail', compact('artikel'));
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
