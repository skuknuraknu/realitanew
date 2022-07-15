<?php

namespace App\Http\Controllers;

use App\Models\Kodefikasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KodefikasiJenisBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodefikasi = DB::SELECT(DB::RAW('SELECT * FROM Tb_KODEFIKASI_JENISBELANJA'));  
        return view('KODEFIKASI.index', compact('kodefikasi'));
    }
    public function add(Request $req){
        $dataREQUEST = [
            "id" => $req->id
            ,"akun" => $req->akun           
            ,"jenis_belanja" => $req->jenisBELANJA           
            ,"jenis_rab" => $req->jenisRAB           
        ];
        $insertKODEFIKASI = kodefikasi::updateOrCreate(["id" => $req->id], $dataREQUEST); // END DATA INSERT REKAT
        return $dataREQUEST;
    }
}
