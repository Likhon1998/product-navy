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

Route::get('/', [ProductController::class, 'index'])->name('home');

//second page routes
Route::get('/organisation', [SecondPageController::class, 'organisation']);
Route::get('/organization', [SecondPageController::class, 'organization']);
Route::get('/president', [SecondPageController::class, 'president']);
Route::get('/product-form', [SecondPageController::class, 'productForm']);
Route::get('/products', [SecondPageController::class, 'products']);
Route::get('/publications', [SecondPageController::class, 'publications']);
Route::get('/role-of-bnfwa', [SecondPageController::class, 'roleOfBnfwa']);
Route::get('/sendEmail', [SecondPageController::class, 'sendEmail']);
Route::get('/shishu-niketon', [SecondPageController::class, 'shishuNiketon']);
Route::get('/vision-mission', [SecondPageController::class, 'visionMission']);

// Admin panel routes (only for authenticated users)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Product CRUD
    Route::resource('products', ProductController::class)->except(['show']);
});

require __DIR__.'/auth.php';
