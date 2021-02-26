<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\suratkeluarController;
use App\Http\Controllers\pendaftaranstkController;
use App\Http\Controllers\nomorbarustkController;
use App\Http\Controllers\suratstkController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\nomorsrtController;
Use App\Http\Controllers\UploadLibController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/suratkeluar',[suratkeluarController::class,'create']);
Route::get('/pendaftaranstk',[pendaftaranstkController::class,'create']);
Route::get('/nomorsrt',[nomorsrtController::class,'index']);
Route::get('/nomorsrt/pdf', [nomorsrtController::class, 'createPDF']);
Route::get('/nomorbarustk',[nomorbarustkController::class,'create']);
Route::post('/nomorbarustk',[nomorbarustkController::class,'store']);
Route::post('/pendaftaranstk',[pendaftaranstkController::class,'store']);
Route::post('/suratkeluar',[suratkeluarController::class,'store']);
Route::get('/suratstk',[suratstkController::class,'create']);
Route::get('/log',[LogController::class,'index']);
Route::resource('log' , LogController::class);
Route::resource('logs2' , LogController::class);
Route::resource('logs3' , LogController::class);
Route::get('/lib', [UploadLibController::class,'uploadForm']);
Route::post('/lib', [UploadLibController::class,'uploadFile'])->name('upload.uploadFile');