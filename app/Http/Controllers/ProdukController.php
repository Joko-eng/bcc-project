<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produks = Produk::paginate(6);
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
    // Validasi input
    //dd($request->all());
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
    $validatedData['nama'] = strtoupper($validatedData['nama']);    // Proses penyimpanan produk
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
    if ($request->hasFile('image3')) {
        $image3 = $request->file('image3');
        $imageName3 = time() . '_3.' . $image3->getClientOriginalExtension();
        $image3->move(public_path('upload/produk'), $imageName3);
        $produk->image3 = $imageName3;
        Log::info('Image 3 uploaded successfully: ' . $imageName3);
    } else {
        Log::info('Image 3 not uploaded');
    }
    
    if ($request->hasFile('image4')) {
        $image4 = $request->file('image4');
        $imageName4 = time() . '_4.' . $image4->getClientOriginalExtension();
        $image4->move(public_path('upload/produk'), $imageName4);
        $produk->image4 = $imageName4;
        Log::info('Image 4 uploaded successfully: ' . $imageName4);
    } else {
        Log::info('Image 4 not uploaded');
    }
    

    $produk->save();

    return redirect()->route('produk.index')->with('success', 'Produk ' . $validatedData['nama'] . ' telah ditambahkan');
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
    public function edit(Produk $produk, $id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all(); // Jika Anda perlu mengirim kategori ke view
        return view('produk.edit', compact('produk', 'kategori'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk, $id)
    {

        //  dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'bahan' => 'required',
            'deskripsi' => 'required|min:5|max:150',
            'kategori_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $produk = Produk::findOrFail($id);
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

        return redirect()->route('produk.index')->with('success', 'Produk ' . $validatedData['nama'] . ' Telah Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Produk::findOrFail($id);
        $product->delete();
        return redirect('/produk')->with(['success' => 'Produk Berhasil Dihapus']);
    }
}
