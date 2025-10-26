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
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/day-care-centre', [PageController::class, 'dayCareCentre'])->name('day-care-centre');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/former-president', [PageController::class, 'formerPresident'])->name('former-president');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/president', [PageController::class, 'president'])->name('president');
Route::get('/gallery-images', [PageController::class, 'galleryImages'])->name('gallery.images');
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/jc-tc', [PageController::class, 'je_tc'])->name('jc-tc');
Route::get('/ladies-club', [PageController::class, 'ladiesClub'])->name('ladies-club');
Route::get('/magazine', [PageController::class, 'magazine'])->name('magazine');
Route::get('/news', [PageController::class, 'news'])->name('news');






// Admin panel routes (only for authenticated users)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Product CRUD
    Route::resource('products', ProductController::class)->except(['show']);
});

require __DIR__.'/auth.php';
