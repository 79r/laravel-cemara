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
Route::resource('jo/cemara', 'JoCemaraController', array('as' => 'jo'));
Route::resource('jo/mim', 'JoMimController', array('as' => 'jo'));

Route::resource('clientajax', 'ClientajaxController'); // ROUTE AJAX
Route::resource('client', 'ClientController');

// JO AJAX
Route::get('job', 'JoajaxController@job')->name('job');
Route::get('job/waiting-list', 'JoajaxController@jobWaitingList')->name('job-waiting-list');
Route::get('job/progress', 'JoajaxController@jobProgress')->name('job-progress');
Route::get('job/done', 'JoajaxController@jobDone')->name('job-done');


Route::get('job/ajaxWaitingList', 'JoajaxController@ajaxWaitingList')->name('ajaxjo-waiting-list');
Route::get('job/ajaxProgress', 'JoajaxController@ajaxProgress')->name('ajaxjo-progress');
Route::get('job/ajaxDone', 'JoajaxController@ajaxDone')->name('ajaxjo-done');

Route::resource('joajax','JoajaxController');
