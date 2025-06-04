<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;


//import java.io; ini kalo di java


// system.out.println; ini kalo di java
// kalo di php pake ::
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloword']);

//pertemuan 12
Route::get('dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class,'index']);
//roote pegawaicontroller
//Route::get('/formulir', [PegawaiController::class,'formulir']);
//Route::post('/formulir/proses', [PegawaiController::class,'proses']);
//roote blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//pertemuan 13
//crud pegawai
Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);


//file 1-ets pr pertemuan 11
Route::get('frontend', function () {
    return view('frontend');
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('bootstap1', function () {
    return view('bootstap1');
});

Route::get('danone', function () {
    return view('danone');
});

Route::get('form', function () {
    return view('form');
});

Route::get('index', function () {
    return view('index');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('latihankode2', function () {
    return view('latihankode2');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});
