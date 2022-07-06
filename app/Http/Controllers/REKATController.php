<?php

namespace App\Http\Controllers;

use App\Models\IKK;
use App\Models\Rekat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class REKATController extends Controller
{
     public function index()
    {
        $rekat = Rekat::all();
        // $ikk = IKK::all();
        $ikk = DB::select( DB::raw("SELECT DISTINCT ikkk.kd_ikk FROM ikkk"));
        return view('REKAT.index', compact('rekat','ikk'));
    }
    public function get(Request $req)
    {
        $kd_ikk = substr($req->kd_ikk,0,8);
        $dataProg = DB::select( DB::raw("SELECT kd_pr,program from ikkk where kd_pr LIKE '%$kd_ikk%'"));
        $dataIku = DB::select( DB::raw("SELECT * FROM ikkk WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku, $dataProg, $req->kd_ikk);

    }
    public function getSingleProgram(Request $req){
        $dataProg = DB::select( DB::raw("SELECT program FROM ikkk WHERE kd_pr = '$req->kd_program'"));
        return array($dataProg, $req->kd_program);
    }
    public function add(Request $req)
    {
        $ajaxREQ = [
            "kd_ikk" => $req->kd_ikk
            ,"indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan 
            ,"kk_mendikbud" => $req->kk_mendikbud
            ,"kk_menkeu" => $req->kk_menkeu
            ,"satuan" => $req->satuan    
            ,"bobot" => $req->bobot
        ];
        $insertKKM = KKM::updateOrCreate(["id" => $req->id],$ajaxREQ);
        return response()->json(["OK INSERT"]);
    }
    public function del(Request $req)
    {
        $dKKM = KKM::where('id', $req->id)->delete();
        $dPERKIN = Perkin::Where('kd_ikk', $req->kd_ikk)->delete();
        return response()->json(["OK DELETED", 'dKKM', 'dPERKIN']);
    }
}
