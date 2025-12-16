<?php

use Illuminate\Support\Facades\Route;

// Home page - Meeting/Catering
Route::get('/', function () {
    return view('meeting');
})->name('home');

// Cafe & Shop page
Route::get('/uberuns', function () {
    return view('uberuns');
})->name('uberuns');

// Birthday Breakfast page
Route::get('/birthday', function () {
    return view('birthday');
})->name('birthday');

// Pick Nick / Picnic page
Route::get('/picknick', function () {
    return view('picknick');
})->name('picknick');

// Legal page (Impressum)
Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');

// Legal page (Datenschutz)
Route::get('/datenschutz', function () {
    return view('datenschutz');
})->name('datenschutz');
