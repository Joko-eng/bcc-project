<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori; 

class DashboardController extends Controller
{
    public function categories()
    {
        // Ambil data kategori dari database
        $categories = Kategori::pluck('nama_kategori')->toArray();
        
        // Kembalikan data dalam format JSON
        return response()->json($categories);
    }
}
