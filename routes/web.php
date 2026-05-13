<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return ('ini adalah halaman about');
});


Route::get('/kontak', function () {
    return 'Ini adalah halaman Kontak';
});

Route::get('/beranda', function () {
    return 'Ini adalah halaman Beranda';
});


Route::get('/produk/{nama}', function ($nama) {
    return 'Nama Produk : ' . $nama;
});

Route::get('/kategori/{kategori}', function ($kategori) {
    return 'Kategori : ' . $kategori;
});

Route::get('/user/{username}', function ($username) {
    return 'Halo, ' . $username;
});