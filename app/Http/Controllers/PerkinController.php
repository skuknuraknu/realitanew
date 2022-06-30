<?php

namespace App\Http\Controllers;

use App\Models\KKM;
use App\Models\Perkin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerkinController extends Controller
{
    public function pttdHandler(Request $req) {
        $pttdData = 
        [
            "PP_TPT" => $req->PP_TPT,
            "PP_TGL" => $req->PP_TGL,
            "PP_REKTOR" => $req->PP_REKTOR,
            "PP_JBT" => $req->PP_JBT,
            "PP_NIP" => $req->PP_NIP,
            "PK_NAMA" => $req->PK_NAMA,
            "PK_JBT" => $req->PK_JBT,
            "PK_NIP" => $req->PK_NIP,
        ];
        $data = Perkin::Create($pttdData);
        return response()->json(["OK - INSERT PTTD"]);
    }
    public function insertTriwulan(Request $req){
        $triwulanData = 
        [
            "kd_ikk" => $req->kd_ikk,
            "indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan,
            "kk_mendikbud" => $req->kk_mendikbud,
            "kk_menkeu" => $req->kk_menkeu,
            "satuan" => $req->satuan,
            "bobot" => $req->bobot,
            "tw_1"   => $req->tw_1,
            "tw_2"   => $req->tw_2,
            "tw_3"   => $req->tw_3,
            "tw_4"   => $req->tw_4,
        ];
        $data = Perkin::updateOrCreate(["id" => $req->id], $triwulanData);
        return response()->json(["OK - INSERTED TW"]);
    }
    public function index() {
        $kkm = KKM::all('kd_ikk');
        $allPERKIN = Perkin::all();
        return view('PERKIN.index', compact('allPERKIN', 'kkm'));
    }  
    public function show() {
        $kkm = KKM::all('kd_ikk', 'indikator_kinerja_kegiatan');
        $allPERKIN = Perkin::all();
        return view('PERKIN.perkinTable', compact('allPERKIN', 'kkm'));
    }
     public function get(Request $req)
    {
        $dataIku = DB::select( DB::raw("SELECT * FROM Tb_KKM WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku);

    }
    public function add(Request $req)
    {
        $ajaxREQ = [
          
        ];
        $data = Perkin::updateOrCreate(["id" => $req->id],$ajaxREQ);
        return $data;
    }
    public function del(Request $req)
    {
        Perkin::where('id', $req->id)->delete();
        return response()->json([$req->id]);
    }
}
