<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home

Route::get('/', function () {
    return view('index');
});


// fasilitas (rooms)

Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/rooms-gallery', function () {
    return view('rooms-gallery');
});

// detail
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/tandc', function () {
    return view('tandc');
})->name('tandc');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


// kontak
Route::get('/contact', function () {
    return view('contact');
});