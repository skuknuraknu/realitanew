<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKKController;
use App\Http\Controllers\KKMController;
use App\Http\Controllers\RANGKAController;
use App\Http\Controllers\PerkinController;
use App\Http\Controllers\PerkinReportController;
use App\Http\Controllers\REKATController;
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

// ~~ Routing untuk Halaman Indikator Kinerja Kegiatan
Route::get('/IKK',[IKKController::class, 'index'])->name('ikk.index');
Route::post('/IKK/add',[IKKController::class, 'add'])->name('ikk.add');
Route::post('/IKK/del',[IKKController::class, 'del'])->name('ikk.del');

// ~~ Routing untuk Halaman Kontrak Kinerja Kegiatan
Route::get('/KKM',[KKMController::class, 'index'])->name('kkm.index');
Route::post('/KKM/add',[KKMController::class, 'add'])->name('kkm.add');
Route::post('/KKM/del',[KKMController::class, 'del'])->name('kkm.del');
Route::get('/KKM/get',[KKMController::class, 'get'])->name('kkm.get');

// ~~ Routing untuk Halaman Rancangan Anggaran
Route::get('/RANGKA',[RANGKAController::class, 'index'])->name('rangka.index');
Route::post('/RANGKA/add',[RANGKAController::class, 'add'])->name('rangka.add');
Route::post('/RANGKA/del',[RANGKAController::class, 'del'])->name('rangka.del');

// ~~ Routing untuk Halaman Rancangan Anggaran
Route::get('/PERKIN',[PerkinController::class, 'index'])->name('perkin.index');
Route::post('/PERKIN/add',[PerkinController::class, 'add'])->name('perkin.add');
Route::post('/PERKIN/del',[PerkinController::class, 'del'])->name('perkin.del');
Route::get('/PERKIN/get',[PerkinController::class, 'get'])->name('perkin.get');
Route::get('/PERKIN/showTable',[PerkinController::class, 'show'])->name('perkin.show');
Route::post('/PERKIN/ttdhandler',[PerkinController::class, 'pttdHandler'])->name('perkin.penandatangananHandler');
Route::post('/PERKIN/addTW',[PerkinController::class, 'insertTriwulan'])->name('perkin.addTW');

//Report
Route::get('/PERKINrpt',[PerkinReportController::class, 'index'])->name('perkinReport.index');

// ~~ Routing untuk Halaman Rekat
Route::get('/REKAT',[REKATController::class, 'index'])->name('rekat.index');
Route::post('/REKAT/add',[REKATController::class, 'add'])->name('rekat.add');
Route::post('/REKAT/del',[REKATController::class, 'del'])->name('rekat.del');
Route::get('/REKAT/get',[REKATController::class, 'get'])->name('rekat.get');

Route::get('/', function(){
	return view('index');
});