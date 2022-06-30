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
        $ikk = IKK::all();
        return view('REKAT.index', compact('rekat','ikk'));
    }
    public function get(Request $req)
    {
        $kd_ikk = substr($req->kd_ikk,0,8);
        $dataProg = DB::select( DB::raw("SELECT kd_program from Tb_IKK where kd_program LIKE '%$kd_ikk%'"));
        $dataIku = DB::select( DB::raw("SELECT * FROM Tb_IKK WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku, $dataProg);

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
