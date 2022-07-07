<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Model import
use App\Models\IKK;
use App\Models\KKM;
use App\Models\Perkin;

class KKMController extends Controller
{
    public function index()
    {
        $ikk =  $dataIku = DB::select( DB::raw("SELECT DISTINCT kd_ikk, indikator_kinerja_kegiatan FROM data_IKK"));
        // $ikk = IKK::all('kd_ikk', 'indikator_kinerja_kegiatan');
        $allKKM = KKM::orderByRaw('kd_ikk')->get();
        return view('KKM.index', compact('allKKM', 'ikk'));
    }
    public function get(Request $req)
    {
        $dataIku = DB::select( DB::raw("SELECT indikator_kinerja_kegiatan FROM data_IKK WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku);
    }
    public function add(Request $req)
    {
        // check apakah data ada yang kosong
        if(
            empty($req->bobot) || 
            $req->kd_ikk == "SILAHKAN PILIH" || 
            empty($req->kk_mendikbud) || 
            empty($req->kk_menkeu) || 
            empty($req->satuan)){
            return "Mohon isi semua kolom";
        }
        // Menyimpan data ke variable array $REQ_KKm
        $REQ_KKM = [
            "kd_ikk" => $req->kd_ikk
            ,"indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan 
            ,"kk_mendikbud" => $req->kk_mendikbud
            ,"kk_menkeu" => $req->kk_menkeu
            ,"satuan" => $req->satuan    
            ,"bobot" => $req->bobot
        ];
        $KKMadd = KKM::updateOrCreate(["id" => $req->id],$REQ_KKM);
        return "Berhasil menyimpan data";
       
    }
    public function del(Request $req)
    {
        $dKKM = KKM::where('id', $req->id)->delete();
        $dPERKIN = Perkin::Where('kd_ikk', $req->kd_ikk)->delete();
        return response()->json(["OK DELETED", 'dKKM', 'dPERKIN']);
    }
}
