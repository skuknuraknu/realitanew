<?php

namespace App\Http\Controllers;

use App\Models\RABPER;
use Illuminate\Http\Request;

class VerPERALATANController extends Controller
{
    public function index(){
        $rabper = RABPER::all();
        return view('VERIFIKASI.RAB_PERALATAN.index', compact('rabper'));
    }
   public function add(Request $req){
    $data = [
        "verifikasi_tim" => $req->verifikasi_perencanaan,
        "verifikasi_pimpinan" => $req->verifikasi_spi,
        "tanggapan" => $req->tanggapan
    ];
    RABPER::where('id', $req->id)->update($data);
    return array($data, $req->id);
   }
}
