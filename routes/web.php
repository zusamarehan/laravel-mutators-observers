<?php

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
    return view('layout');
});

Route::get('/create/product-master', 'ProductController@index')->name('product-master');
Route::post('/product-master', 'ProductController@store')->name('product-store');
Route::get('/view/products-master', 'ProductController@view')->name('products-view');
Route::get('/delete/products-master/{id}', 'ProductController@delete')->name('products-delete');

Route::get('/view/inventory-managers', 'InventoryController@view')->name('inventory-view');
