<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\RANGKA;
use Illuminate\Http\Request;

class RANGKAController extends Controller
{
    public function index()
    {
        $allRANGKA = DB::select( DB::raw("SELECT * FROM rangka ORDER by kd_keg"));
        return view('RANGKA.index', compact('allRANGKA'));
    }
    public function add(Request $req)
    {
        $ajaxREQ = [
            "id"
            ,"kd_keg" => $req->kd_keg
            ,"nama_keg" => $req->nama_keg
            ,"kd_kro" => $req->kd_kro
            ,"nama_kro" => $req->nama_kro
            ,"kd_ro" => $req->kd_ro
            ,"nama_ro" => $req->nama_ro
            ,"kd_kp" => $req->kd_kp
            ,"nama_kp" => $req->nama_kp
            ,"kd_sk" => $req->kd_sk
            ,"nama_sk" => $req->nama_sk
            ,"kd_ak" => $req->kd_ak
            ,"nama_ak" => $req->nama_ak
            ,"kd_mak" => $req->kd_mak
        ];
        $data = RANGKA::updateOrCreate(["id" => $req->id],$ajaxREQ);
        return $data;
    }
    public function del(Request $req)
    {
        RANGKA::where('id', $req->id)->delete();
        return response()->json([$req->id]);
    }
}
