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

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('inventory/divisions', 'DivisionController');
Route::resource('inventory/categories', 'InventoryCategoryController');
Route::resource('inventory/brands', 'InventoryBrandController');
Route::resource('inventory/suppliers', 'InventorySupplierController');

Route::get('inventory/search', 'InventoryItemController@search')->name('inventories.search');

/* import excel */
Route::post('/inventory/store-excel', 'InventoryImportController@store')->name('inventory.import.post');
Route::get('/inventory/import-excel','InventoryImportController@import')->name('inventory.import.excel');
Route::get('/inventory/export-excel','InventoryExportController@export')->name('inventory.export.excel');

Route::resource('inventory', 'InventoryItemController');



/** Routes JO */
Route::resource('jo', 'JoController');