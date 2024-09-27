<?php
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\viewkategController;
use App\Http\Controllers\dashboardController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/produk/{id}', [HomeController::class, 'show'])->name('produk.show');

//kategori
Route::get('/kategori', [viewkategController::class, 'index'])->name('index');
Route::get('/kategori/kalung', [viewkategController::class, 'kalung']);
Route::get('/kategori/dompet', [viewkategController::class, 'dompet']);
Route::get('/kategori/anting-anting', [viewkategController::class, 'antingAnting']);
Route::get('/kategori/gelang', [viewkategController::class, 'gelang']);
Route::get('/kategori/home-decor', [viewkategController::class, 'homeDecor']);
Route::get('/kategori/ikat-pinggang', [viewkategController::class, 'ikatPinggang']);
Route::get('/kategori/bros-ring', [viewkategController::class, 'brosRing']);

Route::get('/detailArtikel/{id}', [HomeController::class, 'show1'])->name('Artikel.detail');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::get('/dashboard', [dashboardController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //produk
    Route::get('admin/produk', function () {
        $search = request('search');
        $posts = Produk::latest();

        if ($search) {
            $posts->where('nama', 'like', '%' . $search . '%');
        }

        $posts = $posts->get();

        return view('admin/produk', ['posts' => $posts, 'search' => $search]);
    })->name('produk.index');

    Route::get('admin/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('admin/tambahProduk', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('admin/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('admin/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('admin/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    // Artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('Artikel.index');
    Route::get('/addartikel', [ArtikelController::class, 'create'])->name('Artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('Artikel.store');
    Route::get('/artikel/{artikel}/edit', [ArtikelController::class, 'edit'])->name('Artikel.edit');
    Route::put('/artikel/{artikel}', [ArtikelController::class, 'update'])->name('Artikel.update');
    Route::delete('/artikel/{artikel}', [ArtikelController::class, 'destroy'])->name('Artikel.destroy');
    Route::delete('/deleteall', [ArtikelController::class, 'deleteAll'])->name('Artikel.deleteAll');
    Route::get('/search', [ArtikelController::class, 'search'])->name('artikel.search');
});

require __DIR__ . '/auth.php';
