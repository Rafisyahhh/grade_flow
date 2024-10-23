<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template-user', function () {
    return view('template-user');
});
Route::get('/template-admin', function () {
    return view('template-admin');
});

Route::get('/Home-Page', function () {
    return view('LandingPage.landingPage');
});

Route::get('/Login-Siswa', function () {
    return view('Login.login');
});

Route::get('/Nilai-Siswa', function () {
    return view('Nilai.nilai');
});

Route::get('/Data-Siswa', function () {
    return view('DataSiswa.data');
});

Route::get('/Data-Nilai', function () {
    return view('DataNilaiSiswa.data');
});

Route::get('/Data-Nilai/Detail', function () {
    return view('DataNilaiSiswa.detail');
});


