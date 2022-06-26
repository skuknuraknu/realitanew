<?php

namespace App\Http\Controllers;

use App\Models\IKK;
use Illuminate\Http\Request;

class IKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $data = IKK::updateOrCreate(["id" => $req->id],$ajaxREQ);
        return $data;
    }
    
    public function del(Request $req)
    {
        IKK::where('id', $req->id)->delete();
        return response()->json([$req->id]);
    }
}
