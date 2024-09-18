<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class viewkategController extends Controller
{
    public function index (){
        $produks = Produk::with('kategoris')->get();
        return view ('kategori.index', compact('produks'));
    }
    public function kalung()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Kalung');
        })->get();

        return view('kategori.kalung', compact('produks'));
    }

    public function dompet()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Dompet');
        })->get();

        return view('kategori.dompet', compact('produks'));
    }

    public function antingAnting()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Anting-Anting');
        })->get();

        return view('kategori.anting_anting', compact('produks'));
    }

    public function gelang()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Gelang');
        })->get();

        return view('kategori.gelang', compact('produks'));
    }

    public function homeDecor()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Home Decor');
        })->get();

        return view('kategori.home_decor', compact('produks'));
    }

    public function ikatPinggang()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Ikat Pinggang');
        })->get();

        return view('kategori.ikat_pinggang', compact('produks'));
    }
    public function brosRing()
    {
        $produks = Produk::with('kategoris')->whereHas('kategoris', function($query) {
            $query->where('nama_kategori', 'Bros Ring');
        })->get();

        return view('kategori.bros_ring', compact('produks'));
    }


}
