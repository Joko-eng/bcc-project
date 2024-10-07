<?php



use App\Http\Controllers\DashboardController; // Pastikan untuk mengimpor controller yang benar
use Illuminate\Support\Facades\Route;


Route::get('api/categories', [DashboardController::class, 'categories']);
