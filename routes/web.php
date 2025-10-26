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





Route::get('/', [ProductController::class, 'index'])->name('home');

//second page routes
Route::get('/news-details', [SecondPageController::class, 'newsDetails']);
Route::get('/notice', [SecondPageController::class, 'notice']);
Route::get('/notifications', [SecondPageController::class, 'notifications']);
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
