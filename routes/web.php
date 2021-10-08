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

// Barang
Route::prefix('barang')->group(function () {
    Route::get('/', 'ItemController@index')->name('barang');
    Route::get('/add', 'ItemController@create')->name('barang.add');
    Route::post('/add/post', 'ItemController@store')->name('barang.add.post');
    Route::get('/edit/{id}', 'ItemController@edit')->name('barang.edit');
    Route::post('/edit/{id}/update', 'ItemController@update')->name('barang.edit.update');
    Route::post('/delete/{id}', 'ItemController@destroy')->name('barang.delete');
});

// Stok Barang
Route::prefix('stokbarang')->group(function () {
    Route::get('/', 'StockItemController@index')->name('stokbarang');
    Route::get('/add', 'StockItemController@create')->name('stokbarang.add');
    Route::post('/add/post', 'StockItemController@store')->name('stokbarang.add.post');
    Route::get('/edit/{id}', 'StockItemController@edit')->name('stokbarang.edit');
    Route::post('/edit/{id}/update', 'StockItemController@update')->name('stokbarang.edit.update');
    Route::post('/delete/{id}', 'StockItemController@destroy')->name('stokbarang.delete');
});

// Barang Masuk
Route::prefix('barangmasuk')->group(function () {
    Route::get('/', 'IncomingItemController@index')->name('barangmasuk');
    Route::get('/add', 'IncomingItemController@create')->name('barangmasuk.add');
    Route::post('/add/post', 'IncomingItemController@store')->name('barangmasuk.add.post');
    Route::get('/edit/{id}', 'IncomingItemController@edit')->name('barangmasuk.edit');
    Route::post('/edit/{id}/update', 'IncomingItemController@update')->name('barangmasuk.edit.update');
    Route::post('/delete/{id}', 'IncomingItemController@destroy')->name('barangmasuk.delete');
});

// Barang Keluar
Route::prefix('barangkeluar')->group(function () {
    Route::get('/', 'ExitItemController@index')->name('barangkeluar');
    Route::get('/add', 'ExitItemController@create')->name('barangkeluar.add');
    Route::post('/add/post', 'ExitItemController@store')->name('barangkeluar.add.post');
    Route::get('/edit/{id}', 'ExitItemController@edit')->name('barangkeluar.edit');
    Route::post('/edit/{id}/update', 'ExitItemController@update')->name('barangkeluar.edit.update');
    Route::post('/delete/{id}', 'ExitItemController@destroy')->name('barangkeluar.delete');
});

Auth::routes();
