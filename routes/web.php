<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/produk/{id}', [HomeController::class, 'show']);


Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('dashboard', compact('title'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/tambah', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    //artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('Artikel.index');
    Route::get('/addartikel', [ArtikelController::class, 'create'])->name('Artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('Artikel.store');
    Route::get('/artikel/{artikel}/edit', [ArtikelController::class, 'edit'])->name('Artikel.edit');
    Route::put('/artikel/{artikel}', [ArtikelController::class, 'update'])->name('Artikel.update');
    Route::delete('/artikel/{artikel}', [ArtikelController::class, 'destroy'])->name('Artikel.destroy');
});

require __DIR__.'/auth.php';
