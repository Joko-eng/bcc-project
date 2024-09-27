<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Model User jika digunakan
use App\Models\Produk; // Tambahkan ini
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    
    public function index()
    {
        $title = "Dashboard";
        
        // Misalnya Anda ingin mengambil data pengguna yang sedang login
        $user = Auth::user();
        $produkCount = Produk::count();
       // dd($produkCount);
        // Atau jika Anda ingin mengambil semua data pengguna
        // $users = User::all();
        $today = Carbon::today()->toDateString();

        $visitors = Visitor::all();
        $totalVisitCount = Visitor::where('date', $today)->sum('visit_count');
        $total = Visitor ::count();

        



        return view('dashboard', compact('title', 'user', 'produkCount','totalVisitCount','total'));
    }
}
