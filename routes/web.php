<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
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

//file 1-ets
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
