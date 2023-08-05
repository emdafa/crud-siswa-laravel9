<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginRegController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaHobiController;
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

// 127.0.0.1:8080/ ==> view welcome
// Route::get('/', function () {
//     return view('home/index');
// });

// Route::get('/',[HomeController::class,'index']);

// Route::get('/',HomeController::class,'index');
Route::resource('agama',AgamaController::class);

Route::resource('hobi',HobiController::class);


//Route::get('siswa',[SiswaController::class,'index']);
//Route::get('siswa/{id}',[SiswaController::class,'show'])->where('id','[0-9]+');


Route::resource('siswa',SiswaController::class);
// Route::get('agama',SiswaController::class,'muncul');

Route::get('/siswahobi',[SiswaHobiController::class,'siswahobi']);

Route::get('/login',[LoginRegController::class,'index']);
Route::post('/login/process',[LoginRegController::class,'login']);
Route::get('/sesi/logout',[LoginRegController::class,'logout']);
Route::get('/register',[LoginRegController::class,'register']);
Route::post('/register/create',[LoginRegController::class,'create']);

// Route::get('agama',[AgamaController::class,'index']);
// Route::post('/agama/create',[AgamaController::class,'store']);

// Route::resource('agama',AgamaController::class);







