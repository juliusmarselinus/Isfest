<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


# =======
# PENDAFTARAN
# =======
Route::get('/daftar', function () {
    // 'login.daftar' memanggil file daftar.blade.php di dalam folder login
    return view('login.daftar'); 
})->name('daftar');

Route::post('/submit-pendaftaran', function (Request $request) {
    dd($request->all()); 
})->name('submit.pendaftaran');




Route::get('/lomba', function () {
    return view('lomba');
})->name('lomba');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/divisi', function () {
    return view('divisi');
})->name('divisi');

Route::get('/divisi', function () {
    return view('divisi');
})->name('divisi');