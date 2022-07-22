<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\RABKEG;
use Illuminate\Http\Request;

class RABKEGIATANController extends Controller
{
	public function index()
    {
        $semua = RABKEG::all();
        return view('RAB_KEGIATAN.index', compact('semua'));
    }
    public function add(Request $req)
    {
        $data = [ 
            "rincian_kegiatan" => $req->rincian_kegiatan,
            "rincian_komponen" => $req->rincian_komponen,
            "akun" => $req->akun,
            "kebutuhan_kegiatan" => $req->kebutuhan_kegiatan,
            "jenis_belanja" => $req->jenis_belanja,
            "kuantitas" => $req->kuantitas,
            "satuan_kuantitas" => $req->satuan_kuantitas,
            "durasi" => $req->durasi,
            "satuan_durasi" => $req->satuan_durasi,
            "kegiatan" => $req->kegiatan,
            "satuan_kegiatan" => $req->satuan_kegiatan,
            "biaya_satuan" => $req->biaya_satuan,
            "pajak" => $req->pajak,
            "jumlah_biaya" => $req->jumlah_biaya,
            "PNBP_Uniker" => $req->PNBP_UNIKER,
            "PNBP_Univ" => $req->PNBP_UNIV
            // "tor" => $req->tor
        ];
        $torlama = DB::SELECT( DB::RAW("SELECT tor FROM Tb_RABKegiatan WHERE tor = '$req->tor' "));
        if(empty($req->tor)){
            $tor = array("tor" => $req->labeltor);
            $final = array_merge($data, $tor);
            // RABKEG::updateOrCreate(["id" => $req->id], $final);
            return array(
                ["status" => "201", "msg" => "Sukses menyimpan record ke db dengan tor kosong", "data" => $final]
            );
        } // akhir empty tor

        $tor2 = array("tor" => $req->tor);
        // update array to newest request data from browser
        $final2 = array_merge($data, $tor2);

        // if(!empty($torlama)){
        //    return array("baru" => $req->tor, "lama" => $torlama);
        //     // if($torlama['0']->tor != $req->tor){
        //     //     $urlTOR = public_path().'/uploads/tor/'.$torlama['0']->tor;
        //     //     unlink($urlTOR);
        //     //     // RABKEG::updateOrCreate(["id" => $req->id], $final2);
        //     // }
        // }
        if(empty($req->labeltor)){
            RABKEG::updateOrCreate(["id" => $req->id], $final2);
            return array(
                ["status" => "201", "msg" => "Sukses menyimpan record ke db", "data" => $final2]
             );
        }

        if($req->tor != $req->labeltor){
            $urlTOR = public_path().'/uploads/tor/'.$req->labeltor;
            unlink($urlTOR);
            RABKEG::updateOrCreate(["id" => $req->id], $final2);
            return array(
                ["status" => "200", "msg" => "Sukses menyimpan & menghapus pdf lama", "data" => $final2]
            );
        }
    }
    public function del(Request $req)
    {
        $select = DB::SELECT( DB::RAW("SELECT tor FROM Tb_RABKegiatan WHERE id = '$req->id'"));
        $urlTOR = public_path().'/uploads/tor/'.$select['0']->tor;
        if(file_exists($urlTOR)){
            unlink($urlTOR);
            RABKEG::where('id', $req->id)->delete();
            return "Sukses unlink & deleted selected data";
            // return $urlTOR;
        }
        RABKEG::where('id', $req->id)->delete();
        return "file not real in path";
    }

    public function pdf(Request $x)
    {
         if(!empty($_FILES['file'])){
            $upload = 'err';
            $maxSize = 307200;
            if(($_FILES['file']['size'] >= $maxSize)) {
                return  'Ukuran file terlalu besar. Tidak lebih dari 300 KB';
            }

            $targetDir = "uploads/tor/";
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file']['name']);
            $targetFilePath = $targetDir.$fileName;

            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
                    $upload = 'ok';
                }
            }
        }
        return response()->json(['ok']);
    }
}