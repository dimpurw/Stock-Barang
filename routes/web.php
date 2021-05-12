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

// Stok Barang
Route::get('/stokbarang', 'StockItemController@index');
Route::get('/stokbarang/add', 'StockItemController@create');
Route::post('/stokbarang/add/post', 'StockItemController@store');
Route::get('/stokbarang/edit/{id}', 'StockItemController@edit');
Route::post('/stokbarang/edit/{id}/update', 'StockItemController@update');
Route::delete('/stokbarang/delete/{id}', 'StockItemController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
