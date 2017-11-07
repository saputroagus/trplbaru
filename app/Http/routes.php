<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/lemari', function () {
    return view('lemari');
});

Route::get('/kursi', function () {
    return view('kursi');
});

Route::get('/meja', function () {
    return view('meja');
});

Route::get('/kasur', function () {
    return view('kasur');
});

Route::get('/rtamu', function () {
    return view('rtamu');
});

Route::get('/cabang', function () {
    return view('cabang');
});


Route::get('/', function () {
    return view('welcome');
});

/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
