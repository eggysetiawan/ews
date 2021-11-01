<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@welcome');
Route::get('/perkanwil', 'DashboardController@perkanwil')->name('perkanwil');
Route::get('perkanwil/{kanwil}/{type}', 'DashboardController@perkanwilType')->name('perkanwilType');


Route::get('/table', 'ExportController@index')->name('index');
Route::get('export/all', 'ExportController@export')->name('export');
Route::get('/export/{kanwil}', 'ExportController@perkanwil')->name('export.perkanwil');
Route::get('/export/{kanwil}/{type}', 'ExportController@perkanwilType')->name('export.perkanwil.type');
