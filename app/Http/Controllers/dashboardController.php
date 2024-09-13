<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard() {
        $produks = Produk::with('kategoris')->get();
        return view('dashboard', compact('produks') );
    }
    
}
