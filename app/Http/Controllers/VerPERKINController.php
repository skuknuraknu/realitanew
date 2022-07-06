<?php

namespace App\Http\Controllers;

use App\Models\Perkin;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\VerPerkin;
use Illuminate\Http\Request;

class VerPERKINController extends Controller
{
    public function index(){
        $perkin    = Perkin::all('kd_ikk', 'status');
        $perkinVer = VerPerkin::all();
        return view("VERIFIKASI.PERKIN.index", compact('perkinVer','perkin'));
    }
    public function getDataPerkin(Request $req){
         $dataPerkin = DB::select( DB::raw("SELECT *, Tb_PERKIN.indikator_kinerja_kegiatan, Tb_PERKIN.kk_mendikbud, Tb_PERKIN.kk_menkeu, Tb_PERKIN.tw_1,Tb_PERKIN.tw_2,Tb_PERKIN.tw_3,Tb_PERKIN.tw_4,Tb_PERKIN.bobot FROM `Tb_VERPERKIN` INNER JOIN Tb_PERKIN ON Tb_PERKIN.kd_ikk = '$req->kd_ikk'"));
         return $dataPerkin;
    }
    public function get(Request $req)
    {
        $dataIku = DB::select( DB::raw("SELECT * FROM Tb_PERKIN WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku);
    }
    public function add(Request $req)
    {
       $dataVERPerkin = [
            "kd_ikk" => $req->kd_ikk
            ,"indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan
            ,"kk_mendikbud" => $req->kk_mendikbud
            ,"kk_menkeu" => $req->kk_menkeu
            ,"bobot" => $req->bobot
            ,"tw_1" => $req->tw_1 
            ,"tw_2" => $req->tw_2
            ,"tw_3" => $req->tw_3 
            ,"tw_4" => $req->tw_4
            ,"jumlah_bobot" => $req->jumlah_bobot
            ,"verifikasi_perencanaan" => $req->verifikasi_perencanaan
            ,"verifikasi_spi" => $req->verifikasi_spi
            ,"tanggapan" => $req->tanggapan
       ];
       $P = null;
       $data = VerPerkin::updateOrCreate(["kd_ikk" => $req->kd_ikk], $dataVERPerkin);
       if($req->verifikasi_perencanaan == "Approved" && $req->verifikasi_spi == "Approved"){
            $P = Perkin::where('kd_ikk', $req->kd_ikk)
           ->update([
               'status' => "Approved"
            ]);
           }
       return array($dataVERPerkin);
    }
}
