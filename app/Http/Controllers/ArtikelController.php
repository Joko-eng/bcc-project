<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $artikels = Artikel::all();
        // dd($artikels);
        $artikels = Artikel::paginate(10);
        return view('Artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd($request->all());
        $currentDate = \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY');
        $namaPublished = Auth::user()->name; 

        return view('Artikel.create', [
            'currentDate' => $currentDate,
            'namaPublished' => $namaPublished
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
            'tgl_published' => 'required|string', // Hanya validasi string untuk parsing nanti
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $namaPublished = Auth::user()->name; // Ambil nama user yang login
    
        $daysInIndonesian = [
            'Senin' => 'Monday',
            'Selasa' => 'Tuesday',
            'Rabu' => 'Wednesday',
            'Kamis' => 'Thursday',
            'Jumat' => 'Friday',
            'Sabtu' => 'Saturday',
            'Minggu' => 'Sunday'
        ];
    
        $tgl_published = $request->tgl_published;
        foreach ($daysInIndonesian as $indonesian => $english) {
            if (strpos($tgl_published, $indonesian) !== false) {
                $tgl_published = str_replace($indonesian, $english, $tgl_published);
                break;
            }
        }
    
        try {
            $tgl_published = \Carbon\Carbon::createFromFormat('l, d F Y', $tgl_published)->format('Y-m-d');
        } catch (\Exception $e) {
            return back()->withErrors(['tgl_published' => 'Format tanggal tidak valid'])->withInput();
        }
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/artikel'), $filename);
    
            // Simpan data artikel
            $artikel = new Artikel;
            $artikel->judul = $request->input('judul');
            $artikel->konten = strip_tags($request->input('konten'));
            $artikel->tgl_published = $tgl_published;
            $artikel->nama_published = $namaPublished; // Simpan nama user yang login sebagai nama_published
            $artikel->gambar = $filename;
    
            $artikel->save();
        }
    
        return redirect()->route('Artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // \Log::info("ID Artikel: " . $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        // $artikel = Artikel::find($id);
        return view('Artikel.edit', compact('artikel'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        // Debug untuk memeriksa input
        // dd($request->all());

        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
            'tgl_published' => 'required|string',
            'nama_published' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $daysInIndonesian = [
            'Senin' => 'Monday',
            'Selasa' => 'Tuesday',
            'Rabu' => 'Wednesday',
            'Kamis' => 'Thursday',
            'Jumat' => 'Friday',
            'Sabtu' => 'Saturday',
            'Minggu' => 'Sunday'
        ];

        $tgl_published = $request->input('tgl_published');
        foreach ($daysInIndonesian as $indonesian => $english) {
            if (strpos($tgl_published, $indonesian) !== false) {
                $tgl_published = str_replace($indonesian, $english, $tgl_published);
                break;
            }
        }

        try {
            $tgl_published = \Carbon\Carbon::createFromFormat('l, d F Y', $tgl_published)->format('Y-m-d');
        } catch (\Exception $e) {
            return back()->withErrors(['tgl_published' => 'Format tanggal tidak valid'])->withInput();
        }

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path('upload/artikel/' . $artikel->gambar))) {
                unlink(public_path('upload/artikel/' . $artikel->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/artikel'), $filename);

            $artikel->gambar = $filename;
        }

        $artikel->update([
            'judul' => $request->input('judul'),
            'konten' => strip_tags($request->input('konten')),
            'tgl_published' => $tgl_published,
            'nama_published' => $request->input('nama_published'),
        ]);

        return redirect()->route('Artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        // Debug: periksa ID artikel dan path gambar
        // dd($artikel->id, $artikel->gambar, public_path('upload/artikel/' . $artikel->gambar));

        $filePath = public_path('upload/artikel/' . $artikel->gambar);

        if (file_exists($filePath) && !is_dir($filePath)) {
            unlink($filePath); // Hapus file
        } else {
            dd('File does not exist or is a directory: ' . $filePath);
        }

        $artikel->delete();

        return redirect()->route('Artikel.index')->with('success', 'Artikel berhasil dihapus');
    }

    public function deleteAll()
    {
        Artikel::truncate();

        return redirect()->route('Artikel.index')->with('success', 'Semua data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $artikels = Artikel::where('judul', 'like', "%$query%")
            ->paginate(10); // Menambahkan paginasi
        
        // dd($artikels->toSql(), $artikels->getBindings());
        return view('Artikel.index', compact('artikels', 'query'));
    }
}