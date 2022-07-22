<?php

namespace App\Http\Controllers;

use App\Models\Rekat;
use App\Models\VerRekat;
use Illuminate\Http\Request;

class VerREKATController extends Controller
{
    public function index(){
        $rekat = REKAT::all();
        return view('VERIFIKASI.REKAT.index', compact('rekat'));
    }
    public function add(Request $req){
        $data = [
            "verifikasi_perencanaan" => $req->verifikasi_perencanaan,
            "verifikasi_spi" => $req->verifikasi_spi,
            "tanggapan" => $req->tanggapan
        ];
        Rekat::where('id', $req->id)->update($data);
        return array($data, $req->id);
    }
}
