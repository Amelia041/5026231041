<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KertasController;
use App\Http\Controllers\KeranjangbelanjaController;
use App\Http\Controllers\keranjangbelanjaController2;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MykaryawanController;


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
//Route::get('dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class,'index']);
//roote pegawaicontroller
//Route::get('/formulir', [PegawaiController::class,'formulir']);
//Route::post('/formulir/proses', [PegawaiController::class,'proses']);
//roote blog
//Route::get('/blog', [BlogController::class,'home']);
//Route::get('/blog/tentang', [BlogController::class,'tentang']);
//Route::get('/blog/kontak', [BlogController::class,'kontak']);

//pertemuan 13
//crud pegawai
Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class,'cari']);

//pr pertemuan 14
Route::get('/kertas', [KertasController::class,'index']);
Route::get('/kertas/tambah',[KertasController::class,'tambah']);
Route::post('/kertas/store', [KertasController::class,'store']);
Route::get('/kertas/edit/{id}',[KertasController::class,'edit']);
Route::post('/kertas/update',[KertasController::class,'update']);
Route::get('/kertas/hapus/{id}',[KertasController::class,'hapus']);
Route::get('/kertas/cari',[KertasController::class,'cari']);

//pertemuan 15
Route::get('/keranjangbelanja', [KeranjangbelanjaController::class,'index']);
Route::get('/keranjangbelanja/beli',[KeranjangbelanjaController::class,'beli']);
Route::post('/keranjangbelanja/store', [KeranjangbelanjaController::class,'store']);
Route::get('/keranjangbelanja/batal/{id}',[KeranjangbelanjaController::class,'batal']);

// keranjang belanja punya manzil
Route::get('/keranjangbelanja2', [keranjangbelanjaController2::class, 'index4']);
Route::get('/keranjangbelanja2/keranjang-tambah', [keranjangbelanjaController2::class, 'keranjangtambah']);
Route::post('/keranjangbelanja2/store', [keranjangbelanjaController2::class, 'store']);
Route::get('/keranjangbelanja2/hapus/{id}', [keranjangbelanjaController2::class, 'hapus']);
Route::get('/keranjangbelanja2/cari', [keranjangbelanjaController2::class, 'cari']);

//crud keryawan
Route::get('/karyawan', [KaryawanController::class, 'index5']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

//EAS
Route::get('/mykaryawan', [MykaryawanController::class, 'index6']);
Route::get('/mykaryawan/editkaryawan/{kodepegawai}', [MykaryawanController::class, 'editkaryawan']);
Route::post('/mykaryawan/update', [MykaryawanController::class, 'update']);
Route::get('/mykaryawan/view/{kodepegawai}', [MyKaryawanController::class, 'view']);




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
    return view('idx');
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
