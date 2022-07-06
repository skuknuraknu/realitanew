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
        $ikk = IKK::all('kd_ikk', 'indikator_kinerja_kegiatan');
        $allKKM = KKM::all();
        return view('KKM.index', compact('allKKM', 'ikk'));
    }
    public function get(Request $req)
    {
        $dataIku = DB::select( DB::raw("SELECT indikator_kinerja_kegiatan FROM Tb_IKK WHERE kd_ikk = '$req->kd_ikk'"));
        return array($dataIku);
    }
    public function add(Request $req)
    {
        $ajaxREQ = [
            "kd_ikk" => $req->kd_ikk
        	,"indikator_kinerja_kegiatan" => $req->indikator_kinerja_kegiatan 
        	,"kk_mendikbud" => $req->kk_mendikbud
        	,"kk_menkeu" => $req->kk_menkeu
        	,"satuan" => $req->satuan	 
        	,"bobot" => $req->bobot
        ];
        $insertKKM = KKM::updateOrCreate(["id" => $req->id],$ajaxREQ);
        return response()->json(["OK INSERT"]);
    }
    public function del(Request $req)
    {
        $dKKM = KKM::where('id', $req->id)->delete();
        $dPERKIN = Perkin::Where('kd_ikk', $req->kd_ikk)->delete();
        return response()->json(["OK DELETED", 'dKKM', 'dPERKIN']);
    }
}
