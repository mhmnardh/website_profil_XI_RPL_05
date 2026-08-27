<?php

use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke profil kelas
Route::get('/', function () {
    return view('class.index');
})->name('class.index');

Route::get('/anggota', function () {
    return view('class.anggota');
})->name('class.anggota');

Route::get('/kontak', function () {
    return view('class.kontak');
})->name('class.kontak');