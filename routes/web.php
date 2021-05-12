<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('t1.new');
});

Route::get('/panier', function () {
    return view('t1.panier');
});
Route::get('/panier-form', function () {
    return view('t1.panier-form');
});
