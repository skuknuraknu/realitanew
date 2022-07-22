<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKKController;
use App\Http\Controllers\KKMController;
use App\Http\Controllers\RANGKAController;
use App\Http\Controllers\PerkinController;
use App\Http\Controllers\PerkinReportController;
use App\Http\Controllers\REKATController;
use App\Http\Controllers\VerPERKINController;
use App\Http\Controllers\KodefikasiJenisBelanjaController;
use App\Http\Controllers\RABKEGIATANController;
use App\Http\Controllers\RABPERALATANController;
use App\Http\Controllers\RABGEDUNGController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\VerREKATController;
use App\Http\Controllers\VerRABKEGIATANController;
use App\Http\Controllers\VerPERALATANController;
use App\Http\Controllers\VerGEDUNGController;


use Illuminate\Support\Facades\DB;
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
Route::get('/PERKINrpt/pdf',[PerkinReportController::class, 'pdf'])->name('perkinReport.pdf');
Route::get('/PERKINrpt/excel',[PerkinReportController::class, 'excel'])->name('perkinReport.excel');

// ~~ Routing untuk Halaman Rekat
Route::get('/REKAT',[REKATController::class, 'index'])->name('rekat.index');
Route::post('/REKAT/add',[REKATController::class, 'add'])->name('rekat.add');
Route::post('/REKAT/del',[REKATController::class, 'del'])->name('rekat.del');
Route::get('/REKAT/get',[REKATController::class, 'get'])->name('rekat.get');
Route::get('/REKAT/getSingleProg',[REKATController::class, 'getSingleProgram'])->name('rekat.getProg');
Route::get('/REKAT/updateGetProg',[REKATController::class, 'updateGetProg']);
Route::get('/REKAT/updateGetIkk',[REKATController::class, 'updateGetIkk']);
Route::get('/REKAT/updateGetKeg',[REKATController::class, 'updateGetKeg']);
Route::get('/REKAT/updateGetAkun',[REKATController::class, 'updateGetAkun']);
Route::get('/REKAT/getSingleKeg',[REKATController::class, 'getSingleKeg'])->name('rekat.getKeg');
Route::get('/REKAT/getAkun',[REKATController::class, 'getAkun'])->name('rekat.getAkun');
Route::get('/REKAT/getKodeKegiatan',[REKATController::class, 'getKodeKegiatan'])->name('rekat.getKodeKegiatan');
Route::post('/REKAT/insertPDF',[REKATController::class, 'insertPDF'])->name('rekat.insertPDF');
Route::post('/REKAT/lanjutRab',[REKATController::class, 'lanjutRab'])->name('rekat.lanjutRab');

// ~~ Routing untuk Halaman Verifikasi Perkin
Route::get('/VERPERKIN',[VerPERKINController::class, 'index'])->name('verPerkin.index');
Route::post('/VERPERKIN/add',[VerPERKINController::class, 'add'])->name('verPerkin.add');
Route::post('/VERPERKIN/del',[VerPERKINController::class, 'del'])->name('verPerkin.del');
Route::get('/VERPERKIN/get',[VerPERKINController::class, 'get'])->name('verPerkin.get');
Route::get('/VERPERKIN/getDataPerkin',[VerPERKINController::class, 'getDataPerkin'])->name('verPerkin.getDataPerkin');

// ~~ Routing untuk Halaman Rancangan Anggaran
Route::get('/KODEFIKASI',[KodefikasiJenisBelanjaController::class, 'index'])->name('kodefikasi.index');
Route::post('/KODEFIKASI/add',[KodefikasiJenisBelanjaController::class, 'add'])->name('kodefikasi.add');
Route::post('/KODEFIKASI/del',[KodefikasiJenisBelanjaController::class, 'del'])->name('kodefikasi.del');

//RAB KEGIATAN
Route::get('/RabKegiatan',[RABKEGIATANController::class, 'index'])->name('rabkeg.index');
Route::post('/RabKegiatan/add',[RABKEGIATANController::class, 'add'])->name('rabkeg.add');
Route::post('/RabKegiatan/del',[RABKEGIATANController::class, 'del'])->name('rabkeg.del');
Route::post('/RabKegiatan/insertPDF',[RABKEGIATANController::class, 'pdf'])->name('rabkeg.pdf');

//RAB PERALATAN
Route::get('/RabPeralatan',[RABPERALATANController::class, 'index'])->name('rabper.index');
Route::post('/RabPeralatan/add',[RABPERALATANController::class, 'add']);
Route::post('/RabPeralatan/del',[RABPERALATANController::class, 'del'])->name('rabper.del');
Route::post('/RabPeralatan/pdf',[RABPERALATANController::class, 'pdf'])->name('rabper.pdf');

//RAB GEDUNG
Route::get('/RabGedung',[RABGEDUNGController::class, 'index'])->name('rabgdg.index');
Route::post('/RabGedung/add',[RABGEDUNGController::class, 'add'])->name('rabgdg.add');
Route::post('/RabGedung/del',[RABGEDUNGController::class, 'del'])->name('rabgdg.del');
//			> file upload
Route::post('/RabGedung/sertifikatPDF',[RABGEDUNGController::class, 'sertifikat'])->name('rabgdg.sertifikat');
Route::post('/RabGedung/simakBMN',[RABGEDUNGController::class, 'simak_bmn'])->name('rabgdg.upload_bmn');
Route::post('/RabGedung/pupr',[RABGEDUNGController::class, 'uploadPUPR'])->name('rabgdg.pupr');
Route::post('/RabGedung/imb',[RABGEDUNGController::class, 'uploadIMB'])->name('rabgdg.imb');
Route::post('/RabGedung/amdal',[RABGEDUNGController::class, 'uploadAMDAL'])->name('rabgdg.amdal');
Route::post('/RabGedung/rks',[RABGEDUNGController::class, 'uploadRKS'])->name('rabgdg.rks');
Route::post('/RabGedung/proposal',[RABGEDUNGController::class, 'uploadPROPOSAL'])->name('rabgdg.proposal');
Route::post('/RabGedung/rab',[RABGEDUNGController::class, 'uploadrab'])->name('rabgdg.rab');
Route::post('/RabGedung/perencanaan',[RABGEDUNGController::class, 'uploadPERENCANAAN'])->name('rabgdg.perencanaan');

//Modal
Route::post('/Modal/rkadd',[ModalController::class, 'addModalRK']);
Route::post('/Modal/getrk',[ModalController::class, 'getModalRK']);

// Verifikasi rekat 
Route::get('/VERREKAT', [VerREKATController::class, 'index'])->name('vRekat.index');
Route::post('/VERREKAT/add', [VerREKATController::class, 'add'])->name('vRekat.add');
// Verifikasi rab kegiatan
Route::get('/VERRABKEGIATAN', [VerRABKEGIATANController::class, 'index'])->name('vRabKeg.index');
Route::post('/VERRABKEGIATAN/add', [VerRABKEGIATANController::class, 'add'])->name('vRabKeg.add');
// Verifikasi rab peralatan
Route::get('/VERRABPERALATAN', [VerPERALATANController::class, 'index'])->name('vRabPer.index');
Route::post('/VERRABPERALATAN/add', [VerPERALATANController::class, 'add'])->name('vRabPer.add');
// Verifikasi rab gedung
Route::get('/VERRABGEDUNG', [VerGEDUNGController::class, 'index'])->name('vRabGdg.index');
Route::post('/VERRABGEDUNG/add', [VerGEDUNGController::class, 'add'])->name('vRabGdg.add');

Route::get('/', function(){
	return view('index');
});