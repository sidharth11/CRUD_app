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
Route::get('file-upload', 'App\Http\Controllers\FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'App\Http\Controllers\FileUploadController@fileUploadPost')->name('file.upload.post');
Route::resource('contacts', 'App\Http\Controllers\ContactController');
