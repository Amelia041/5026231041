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

