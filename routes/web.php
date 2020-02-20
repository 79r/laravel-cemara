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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('inventory/division', 'DivisionController');
Route::resource('inventory/category', 'CategoryController');
Route::resource('inventory/brand', 'BrandController');
Route::resource('inventory/supplier', 'SupplierController');

/* import excel */
Route::get('inventory/import-excel','InventoryImportController@import')->name('inventory.import.excel');
Route::post('inventory/store-excel','InventoryImportController@import')->name('inventory.store.excel');

Route::resource('inventory', 'InventoryController');
