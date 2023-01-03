<?php

use App\Http\Controllers\produkController;
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

Route::get('/', [produkController::class, 'index']);

Route::get('upload', [produkController::class, 'create']);

Route::post('uploadProduk', [produkController::class, 'store']);

Route::get('show/{id}', [produkController::class, 'show']);

Route::put('updateThumbnail/{id}', [produkController::class, 'updateThumbnail']);

Route::get('editThumbnail/{id}', [produkController::class, 'editThumbnail']);

Route::delete('delete/{id}', [produkController::class, 'destroy']);