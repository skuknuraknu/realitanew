<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKKController;
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
Route::get('/IKK',[IKKController::class, 'index'])->name('IKK.index');
Route::post('/IKK/add',[IKKController::class, 'add'])->name('ikk.add');

Route::get('/', function () {
    return view('welcome');
});
