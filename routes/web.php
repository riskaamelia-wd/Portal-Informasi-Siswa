<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

// Route::get('/home', function () {
//     return view('welcome');
// });


Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/info-kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('data-siswa', [MenuController::class, 'data_siswa']);


// Route::get('/beranda', 'MenuController@home');