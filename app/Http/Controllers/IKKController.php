<?php

namespace App\Http\Controllers;

use App\Models\IKK;
use App\Models\KKM;
use Illuminate\Http\Request;

class IKKController extends Controller
{
    public function index()
    {
        $allIKK = IKK::all();
        return view('IKK.index', compact('allIKK'));
    }
    public function add(Request $req)
    {
        $ajaxREQ = [
            "kd_ss" => $req->kd_ss
            ,"sasaran" => $req->sasaran
            ,"kd_ikk" => $req->kd_ikk
            ,"indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan
            ,"kd_program" => $req->kd_program
            ,"program" => $req->program
            ,"kd_keg" => $req->kd_keg
            ,"rincian_kegiatan" => $req->rincian_kegiatan
        ];
        $insertIKK = IKK::updateOrCreate(["id" => $req->id],$ajaxREQ);
        // $insertKKM = KKM::updateOrCreate(["kd_ikk" => $req->kd_ikk], [
        //     "kd_ikk" => $req->kd_ikk,
        //     "indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan
        // ]);
        return response()->json(["OK - INSERT IKK & KKM"]);
    }
    public function del(Request $req)
    {
        IKK::where('id', $req->id)->delete();
        KKM::where('kd_ikk', $req->kd_ikk)->delete();
        return response()->json(["OK - DELETE IKK & KKM"]);
    }
}
