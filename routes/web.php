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
    return view('welcome');
});

Route::get('stockbarang', function () {
    return view('stock_barang.index');
});

Route::get('stockbarang/add', function () {
    return view('stock_barang.add');
});

Route::get('stockbarang/edit', function () {
    return view('stock_barang.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
