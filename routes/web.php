<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\data_guruController;
use App\Http\Controllers\data_siswaController;
use App\Http\Controllers\setup_kelasController;
use App\Http\Controllers\setup_pelajaranController;
use App\Http\Controllers\tbl_jadwalController;
use App\Http\Controllers\tbl_nilaiController;
use App\Http\Controllers\tbl_ruanganController;
use App\Http\Controllers\tb_kontakController;
use App\Http\Controllers\tb_pengumumanController;
use App\Http\Controllers\tb_pesertaController;
use App\Http\Controllers\tb_userController;
use App\Http\Controllers\user_adminController;

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
    return view('welcome0139');
});

Route::resource('dataguru', data_guruController::class);
Route::resource('datasiswa', data_siswaController::class);
Route::resource('setupkelas', setup_kelasController::class);
Route::resource('setuppelajaran', setup_pelajaranController::class);
Route::resource('tbljadwal', tbl_jadwalController::class);
Route::resource('tblnilai', tbl_nilaiController::class);
Route::resource('tblruangan', tbl_ruanganController::class);
Route::resource('tbkontak', tb_kontakController::class);
Route::resource('tbpengumuman', tb_pengumumanController::class);
Route::resource('tbpeserta', tb_pesertaController::class);
Route::resource('tbuser', tb_userController::class);
Route::resource('useradmin', user_adminController::class);