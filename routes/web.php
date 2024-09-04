<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('dashboard', compact('title'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/tambah', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('Artikel.index');
    Route::get('/addartikel', [ArtikelController::class, 'create'])->name('Artikel.create');
});

require __DIR__.'/auth.php';
