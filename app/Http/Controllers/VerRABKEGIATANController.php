<?php

namespace App\Http\Controllers;
use App\Models\RABKEG;
use Illuminate\Http\Request;

class VerRABKEGIATANController extends Controller
{
    public function index(){
        $rabkeg = RABKEG::all();
        return view('VERIFIKASI.RAB_KEGIATAN.index', compact('rabkeg'));
    }
    public function add(Request $req){
        $data = [
            "verifikasi_tim" => $req->verifikasi_perencanaan,
            "verifikasi_pimpinan" => $req->verifikasi_spi,
            "tanggapan" => $req->tanggapan
        ];
        RABKEG::where('id', $req->id)->update($data);
        return array($data, $req->id);
    }
}
