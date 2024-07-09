<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DatamahasiswaController;
use App\Http\Controllers\EclatController;
use App\Http\Controllers\DatahasilController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('home', function () {
    return view('home');
});

Route::get('datamahasiswa', [DatamahasiswaController::class, 'data']);
Route::get('datamahasiswa/add', [DatamahasiswaController::class, 'add']);
Route::post('datamahasiswa', [DatamahasiswaController::class, 'addProcess']);
Route::get('datamahasiswa/edit/{id}', [DatamahasiswaController::class, 'edit']);
Route::patch('datamahasiswa/{id}', [DatamahasiswaController::class, 'update']);
Route::delete('datamahasiswa/{id}', [DatamahasiswaController::class, 'destroy']);
Route::get('datamahasiswa/upload', [DatamahasiswaController::class, 'import'])->name('datamahasiswa.upload');
Route::post('datamahasiswa/upload', [DatamahasiswaController::class, 'processUpload'])->name('datamahasiswa.upload.process');

Route::resource('dataproses', EclatController::class)->only(['index']);
// Route::resource('dataproses', EclatController::class);
Route::get('dataproses', [EclatController::class, 'index'])->name('dataproses.index');
Route::get('dataproses/search', [EclatController::class, 'search'])->name('dataproses.search');
Route::post('dataproses/proses', [EclatController::class, 'process'])->name('dataproses.process');
Route::post('dataproses/result', [EclatController::class, 'addprocess'])->name('dataproses.result');





Route::resource('datahasil', 'DatahasilController');
Route::get('datahasil', [DatahasilController::class, 'hasil']);



