<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('contoh', 'ContohController');
Route::resource('sekolah', 'SekolahController');
// Route::get('contoh2', 'ContohController@index2');
// Route::get('contoh3', 'ContohController@index3');
Route::resource('siswa', 'SiswaController');
Route::resource('kategori', 'KategoriController');
Route::resource('tag', 'TagController');
