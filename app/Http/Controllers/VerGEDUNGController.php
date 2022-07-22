<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RABGDG;
class VerGEDUNGController extends Controller
{
    public function index()
    {
        $rabgdg = RABGDG::all();
        return view('VERIFIKASI.RAB_GEDUNG.index', compact('rabgdg'));
    }
    public function add(Request $req){
        $data = [
            "verifikasi_tim" => $req->verifikasi_perencanaan,
            "verifikasi_pimpinan" => $req->verifikasi_spi,
            "tanggapan" => $req->tanggapan
        ];
        RABGDG::where('id', $req->id)->update($data);
        return array($data, $req->id);
       }
}
