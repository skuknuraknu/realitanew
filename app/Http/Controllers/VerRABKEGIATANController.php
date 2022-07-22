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
}
