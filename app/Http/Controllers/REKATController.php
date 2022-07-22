<?php

namespace App\Http\Controllers;

use App\Models\IKK;
use App\Models\Rekat;
use App\Models\RANGKA;
use App\Models\RABKEG;
use App\Models\RABPER;
use App\Models\RABGDG;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class REKATController extends Controller
{
    // Fungsi utama dari controller rekat
    public function index()
    {
        //select data
        $rekat = Rekat::all();
        $rk = DB::select( DB::raw("SELECT DISTINCT nama_sk FROM rangka"));
        $ikk = DB::select( DB::raw("SELECT DISTINCT kd_ikk FROM XTb_LAP_PERKIN"));
        // return view dengan compact data
        return view('REKAT.index', compact('rekat','ikk','rk'));
    }
    public function updateGetProg(Request $x){
        $kumpulanPROGRAM = DB::select( DB::raw("SELECT DISTINCT kd_pr from data_IKK where kd_pr LIKE '%$x->kd_programSPAN%'"));
        return $kumpulanPROGRAM;
    }
    public function updateGetIkk(Request $x){
        $kumpulanPROGRAM = DB::select( DB::raw("SELECT DISTINCT kd_ikk from data_IKK where kd_ikk LIKE '%$x->kd_ikkSPAN%'"));
        return $kumpulanPROGRAM;
    }
    public function updateGetKeg(Request $req){
         $kumpulanKEGIATAN = DB::select( DB::raw("select kd_keg,rincian_kegiatan from data_IKK where kd_keg LIKE '%K $req->kd_programVAL%'"));
        return $kumpulanKEGIATAN;
    }
    public function updateGetAkun(Request $req){
        $kumpulanAKUN = DB::select( DB::raw("SELECT kd_ak FROM rangka WHERE nama_sk = '$req->sub_komponen'"));
        return $kumpulanAKUN;
    }
    // Fungsi untuk get data
    public function get(Request $req)
    {
        /* get data yang dikirim dari browser dan 
        substring untuk mengambil karakter tertentu
        */
        $kd_ikk = substr($req->kd_ikk,0,8);
        $kd_prog = substr($req->kd_ikk, 4,3);
        // DB SELECT & RAW untuk menampilkan selected value dari browser
        $dataIku = DB::select( DB::raw("SELECT * FROM XTb_LAP_PERKIN WHERE kd_ikk = '$req->kd_ikk'"));
        $dataProg = DB::select( DB::raw("SELECT DISTINCT kd_pr from data_IKK where kd_pr LIKE '%P $kd_prog%'"));
        // return array
        return array($dataIku, $dataProg);

    }

    public function getSingleProgram(Request $req){
        /* get data yang dikirim dari browser dan 
        substring untuk mengambil karakter tertentu
        */
        $kd_prog = substr($req->kd_program, 2,3);
        // DB SELECT & RAW untuk menampilkan selected value dari browser
        $dataKeg = DB::select( DB::raw("SELECT DISTINCT kd_keg,rincian_kegiatan from data_IKK where kd_keg LIKE '%K $kd_prog%'"));
        $dataProg = DB::select( DB::raw("SELECT program FROM data_IKK WHERE kd_pr = '$req->kd_program'"));
         // return array 
        return array($dataKeg, $dataProg, $kd_prog);
    }

    // Fungsi mengambil kode kegiatan
    public function getSingleKeg(Request $req){
        // DB SELECT & RAW untuk menampilkan selected value dari browser
        $dataKeg = DB::select( DB::raw("SELECT rincian_kegiatan FROM data_IKK WHERE kd_keg = '$req->kd_kegiatan'"));
         // return array 
        return array($dataKeg);
    } 

    // Fungsi mengambil akun
    public function getAkun(Request $req){
        // DB SELECT & RAW untuk menampilkan selected value dari browser
        $dataAkun = DB::select( DB::raw("SELECT kd_ak FROM rangka WHERE nama_sk = '$req->sub_komponen'"));
         // return array 
        return array($dataAkun);
    }

    public function getKodeKegiatan(Request $req){
        $dataKd_Kegiatan = DB::select( DB::raw("SELECT kd_keg FROM data_IKK WHERE rincian_kegiatan = '$req->kd_kegiatan'"));
        return $dataKd_Kegiatan;
    }
    
    // Insert PDF
    public function insertPDF(Request $x)
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

    // Fungsi untuk insert data
    public function add(Request $req)
    {
        $kode_akun = $req->akunSPAN;
        $A1 = substr($kode_akun,0,1);
        $A2 = substr($kode_akun,0,2);
        $A3 = substr($kode_akun,0,3);
        $A4 = substr($kode_akun,0,4);
        $A5 = substr($kode_akun,0,5);
        $TOR = $req->tor;

        if($req->kd_ikk == "SILAHKAN PILIH" && $req->kd_program == "SILAHKAN PILIH" && $req->rincian_kegiatan == "SILAHKAN PILIH"){
            $dataKODE_SK = DB::select( DB::raw("SELECT kd_sk FROM rangka WHERE nama_sk = '$req->sub_komponenSPAN'"));

            $data = [
                'kd_ikk' =>  $req->kd_ikkSPAN
                ,'indikator_kinerja_kegiatan' =>  $req->indikator_kinerja_kegiatan
                ,'kd_program' => $req->kd_programSPAN  
                ,'program' => $req->program 
                ,'kd_keg' => $req->kd_kegiatanSPAN 
                ,'rincian_kegiatan' => $req->rincian_kegiatanSPAN
                ,'A1' => $A1
                ,'A2' => $A2
                ,'A3' => $A3
                ,'A4' => $A4
                ,'A5' => $A5
                ,'kd_rk' =>$dataKODE_SK['0']->kd_sk
                ,'rincian_komponen' => $req->sub_komponenSPAN
                ,'akun' => $req->akunSPAN
                ,'tahun' => date("Y")
            ];
            Rekat::where('id', $req->id)->update($data);
            return array($data);

        }else{
            // KODEFIKASI UNTUK INSERT
            $Xkode_akun = $req->akunSPAN;
            $XA1 = substr($Xkode_akun,0,1);
            $XA2 = substr($Xkode_akun,0,2);
            $XA3 = substr($Xkode_akun,0,3);
            $XA4 = substr($Xkode_akun,0,4);
            $XA5 = substr($Xkode_akun,0,5);

    $dataKODE_SK = DB::select( DB::raw("SELECT kd_sk FROM rangka WHERE nama_sk = '$req->sub_komponenSPAN' AND kd_ak = '$req->akunSPAN' "));
            $dataREQUEST = [
                'kd_ikk' =>  $req->kd_ikk
                ,'indikator_kinerja_kegiatan' =>  $req->indikator_kinerja_kegiatan
                ,'kd_program' => $req->kd_program  
                ,'program' => $req->program 
                ,'kd_keg' => $req->kd_kegiatanSPAN
                ,'rincian_kegiatan' => $req->rincian_kegiatan
                ,'A1' => $XA1
                ,'A2' => $XA2
                ,'A3' => $XA3
                ,'A4' => $XA4
                ,'A5' => $XA5
                ,'kd_rk' => $dataKODE_SK['0']->kd_sk
                ,'rincian_komponen' => $req->rincian_komponen
                ,'akun' => $req->akunSPAN
                ,'tahun' => date("Y")
            ];
            $insertREKAT = Rekat::updateOrCreate(["id" => $req->id], $dataREQUEST); // END DATA INSERT REKAT
            return $dataREQUEST;
        }
    }

    // Fungsi hapus data
    public function del(Request $req)
    {
        // $select = DB::SELECT( DB::RAW("SELECT TOR FROM Tb_REKAT WHERE kd_keg = '$req->kd_kegiatan'"));
        // $urlTOR = public_path().'/uploads/tor/'.$select['0']->TOR;
        // if(file_exists($urlTOR)){
        //     unlink($urlTOR);
        // }
        // return ;
        RABKEG::where('rincian_kegiatan', $req->rk)->delete();
        Rekat::Where('id', $req->id)->delete();
        return response()->json(["OK DELETED"]);
    }
    
    public function lanjutRab(Request $req){
        $kode_akun = $req->akunSPAN;
        $A1 = substr($kode_akun,0,1);
        $A2 = substr($kode_akun,0,2);
        $A3 = substr($kode_akun,0,3);
        $A4 = substr($kode_akun,0,4);
        $A5 = substr($kode_akun,0,5);
        $TOR = $req->tor;

        if($req->kd_ikk == "SILAHKAN PILIH" && $req->kd_program == "SILAHKAN PILIH" && $req->rincian_kegiatan == "SILAHKAN PILIH"){
            $dataKODE_SK = DB::select( DB::raw("SELECT kd_sk FROM rangka WHERE nama_sk = '$req->rincian_komponen'"));

            $data = [
                'kd_ikk' =>  $req->kd_ikkSPAN
                ,'indikator_kinerja_kegiatan' =>  $req->indikator_kinerja_kegiatan
                ,'kd_program' => $req->kd_programSPAN  
                ,'program' => $req->program 
                ,'kd_keg' => $req->kd_kegiatanSPAN 
                ,'rincian_kegiatan' => $req->rincian_kegiatanSPAN
                ,'A1' => $A1
                ,'A2' => $A2
                ,'A3' => $A3
                ,'A4' => $A4
                ,'A5' => $A5
                ,'kd_rk' =>$dataKODE_SK['0']->kd_sk
                ,'rincian_komponen' => $req->rincian_komponen
                ,'akun' => $req->akunSPAN
                ,'tahun' => date("Y")
            ];
            Rekat::where('id', $req->id)->update($data);
            $jenis_rab = DB::SELECT( DB::RAW("SELECT jenis_rab FROM Tb_KODEFIKASI_JENISBELANJA WHERE akun = '$req->akunSPAN' ") );
            $dataRAB = [
                "rincian_kegiatan" => $req->rincian_kegiatanSPAN,
                "rincian_komponen" => $req->rincian_komponen,
                "akun" => $req->akunSPAN
            ];
            if($jenis_rab['0']->jenis_rab == "RAB_PERALATAN"){
                $insertRABALT = RABPER::create($dataRAB);
                return route('rabper.index');
            }else if($jenis_rab['0']->jenis_rab == "RAB_KEGIATAN"){
                $insertRABKEG = RABKEG::create($dataRAB);
                return route('rabkeg.index');
                  // return $dataRAB;
            }else if($jenis_rab['0']->jenis_rab == "RAB_GEDUNG"){
                $insertRABGDG = RABGDG::create($dataRAB);
                return route('rabgdg.index');
            }else{
                return "ERROR";
            }
            return array($jenis_rab, $req->akunSPAN);

        }else{
            // KODEFIKASI UNTUK INSERT
            $Xkode_akun = $req->akunSPAN;
            $XA1 = substr($Xkode_akun,0,1);
            $XA2 = substr($Xkode_akun,0,2);
            $XA3 = substr($Xkode_akun,0,3);
            $XA4 = substr($Xkode_akun,0,4);
            $XA5 = substr($Xkode_akun,0,5);

    $dataKODE_SK = DB::select( DB::raw("SELECT kd_sk FROM rangka WHERE nama_sk = '$req->rincian_komponen' AND kd_ak = '$req->akunSPAN' "));
            $dataREQUEST = [
                'kd_ikk' =>  $req->kd_ikkSPAN
                ,'indikator_kinerja_kegiatan' =>  $req->indikator_kinerja_kegiatan
                ,'kd_program' => $req->kd_program
                ,'program' => $req->program 
                ,'kd_keg' => $req->kd_kegiatanSPAN
                ,'rincian_kegiatan' => $req->rincian_kegiatanSPAN
                ,'A1' => $XA1
                ,'A2' => $XA2
                ,'A3' => $XA3
                ,'A4' => $XA4
                ,'A5' => $XA5
                ,'kd_rk' => $dataKODE_SK['0']->kd_sk
                ,'rincian_komponen' => $req->rincian_komponen
                ,'akun' => $req->akunSPAN
                ,'tahun' => date("Y")
            ];
            $insertREKAT = Rekat::updateOrCreate(["id" => $req->id], $dataREQUEST); // END DATA INSERT REKAT
            $jenis_rab = DB::SELECT( DB::RAW("SELECT jenis_rab FROM Tb_KODEFIKASI_JENISBELANJA WHERE akun = '$req->akunSPAN' ") );
            $dataRAB = [
                "rincian_kegiatan" => $req->rincian_kegiatan,
                "rincian_komponen" => $req->rincian_komponen,
                "akun" => $req->akunSPAN
            ];
            if($jenis_rab['0']->jenis_rab == "RAB_PERALATAN"){
                $insertRABALT = RABPER::create($dataRAB);
                return route('rabper.index');
            }else if($jenis_rab['0']->jenis_rab == "RAB_KEGIATAN"){
                $insertRABKEG = RABKEG::create($dataRAB);
                return route('rabkeg.index');
                 // return array("ok",$dataREQUEST, $dataRAB);
            }else if($jenis_rab['0']->jenis_rab == "RAB_GEDUNG"){
                $insertRABGDG = RABGDG::create($dataRAB);
                return route('rabgdg.index');
            }else{
                return "ERROR";
            }
            return array("last", $dataREQUEST);
        }     
    }
}
