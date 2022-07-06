<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model import
use App\Models\IKK;
use App\Models\KKM;

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
            ,"kd_pr" => $req->kd_program
            ,"program" => $req->program
            ,"kd_keg" => $req->kd_keg
            ,"rincian_kegiatan" => $req->rincian_kegiatan
        ];
        $insertIKK = IKK::updateOrCreate(["id" => $req->id],$ajaxREQ);
        // $insertKKM = KKM::updateOrCreate(["kd_ikk" => $req->kd_ikk], [
        //     "kd_ikk" => $req->kd_ikk,
        //     "indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan
        // ]);
        return response()->json(["OK - INSERT DATA IKK"]);
    }
    public function del(Request $req)
    {
        IKK::where('id', $req->id)->delete();
        return response()->json(["OK - DELETE DATA IKK"]);
    }
}
