<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\secondpageController;

// Public home page
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/ashar-alo', [PageController::class, 'asharAlo'])->name('ashar-alo');
Route::get('/chief-message', [PageController::class, 'chiefMessage'])->name('chief-message');

// Admin panel routes (only for authenticated users)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Product CRUD
    Route::resource('products', ProductController::class)->except(['show']);
});

require __DIR__.'/auth.php';
