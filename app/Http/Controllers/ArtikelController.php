<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        // dd($artikels);
        return view('Artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request->all());
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
            'tgl_published' => 'required|date',
            'nama_published' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
          // Ambil tanggal dari request
    $tanggal = $request->input('tgl_published');

    // Array nama hari dalam bahasa Indonesia
    $hari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    );

    // Array nama bulan dalam bahasa Indonesia
    $bulan = array(
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    );

    // Ubah format tanggal ke format yang diinginkan
    $nama_hari = $hari[date('l', strtotime($tanggal))];
    $tanggal_ubah = date('d', strtotime($tanggal));
    $nama_bulan = $bulan[date('F', strtotime($tanggal))];
    $tahun = date('Y', strtotime($tanggal));

    // Format akhir
    $format_tanggal = "$nama_hari, $tanggal_ubah $nama_bulan $tahun";


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/artikel'), $filename);
            
            // \Log::info('Gambar disimpan sebagai: ' . $filename);
            
            $artikel = new Artikel;
            $artikel->judul = $request->input('judul');
            $artikel->konten = $request->input('konten');
            $artikel->tgl_published = $request->input('tgl_published');
            $artikel->tgl_published = $tanggal; // Simpan tanggal asli ke database
          //  $artikel->nama_published = $format_tanggal; // Simpan tanggal yang telah diformat ke database
            $artikel->nama_published = $request->input('nama_published');
            $artikel->gambar = $filename;

            $artikel->save();

            // \Log::info('Artikel disimpan dengan ID: ' . $artikel->id);
        }

        return redirect()->route('Artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {

        return view('Artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        // dd('Update method called');
        // \Log::info('Update method called with ID: ' . $artikel->id);

        // dd($request->all());
        // dd($artikel);

        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
            'tgl_published' => 'required|date',
            'nama_published' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar tidak wajib di-upload kembali
        ]);

        // Cek apakah ada file gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if (file_exists(public_path('upload/artikel/' . $artikel->gambar))) {
                unlink(public_path('upload/artikel/' . $artikel->gambar));
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/artikel'), $filename);

            // Update data gambar di database
            $artikel->gambar = $filename;
        }

        // Update data artikel
        $artikel->update([
            'judul' => $request->input('judul'),
            'konten' => $request->input('konten'),
            'tgl_published' => $request->input('tgl_published'),
            'nama_published' => $request->input('nama_published'),
        ]);

        // dd($request->all());

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
    
        // Cek apakah file ada dan pastikan itu adalah file, bukan direktori
        if (file_exists($filePath) && !is_dir($filePath)) {
            unlink($filePath); // Hapus file
        } else {
            // Debug: jika file tidak ditemukan atau path adalah direktori
            dd('File does not exist or is a directory: ' . $filePath);
        }
    
        // Hapus artikel dari database
        $artikel->delete();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('Artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
    
}