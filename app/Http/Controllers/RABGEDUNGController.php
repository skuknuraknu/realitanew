<?php

namespace App\Http\Controllers;

use App\Models\RABGDG;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RABGEDUNGController extends Controller
{
    public function index()
    {
        $rabgdg = RABGDG::all();
        return view('RAB_GEDUNG.index', compact('rabgdg'));
    }
    public function add(Request $req)
    {
        $data = [ 
            "rincian_kegiatan" => $req->rincian_kegiatan
            ,"rincian_komponen" => $req->rincian_komponen
            ,"akun" => $req->akun
            ,"kebutuhan_kegiatan" => $req->kebutuhan_kegiatan
            ,"jenis_belanja" => $req->jenis_belanja
            ,"alamat" => $req->alamat_gedung
            ,"latlong" => $req->latlong
            ,"luas_bangunan" => $req->luas_bangunan
            ,"jumlah_gedung" => $req->jumlah_gedung
            ,"jumlah_lantai" => $req->jumlah_lantai
            ,"ruang_kuliah" => $req->ruang_kuliah
            ,"ruang_lab" => $req->ruang_lab
            ,"ruang_kantor" => $req->ruang_kantor
            ,"lainnya" => $req->lainnya
            ,"kesesuaian_gedung" => $req->kesesuaian_gedung
            ,"DED_AWAL" => $req->ded_awal
            ,"DED_REVIEW" => $req->ded_review
            ,"nilai_perencanaan" => $req->nilai_perencanaan
            ,"nilai_struktur" => $req->nilai_struktur
            ,"nilai_me" => $req->nilai_me
            ,"nilai_landscape" => $req->nilai_landscape
            ,"nilai_pengawasan" => $req->nilai_pengawasan
            ,"jumlah_nilai" => $req->jumlah_nilai
        ];
        if(!empty($req->label_sertifikat) && !empty($req->label_bmn) && !empty($req->label_pupr) && !empty($req->label_imb) && !empty($req->label_amdal) && !empty($req->label_rks) && !empty($req->label_proposal) && !empty($req->label_rab) && !empty($req->label_perencanaan) && empty($req->sertifikat) && empty($req->simak_bmn) && empty($req->pupr) && empty($req->imb) && empty($req->amdal) && empty($req->rks) && empty($req->proposal) && empty($req->rab) && empty($req->perencanaan) ){
            // $insertRABGDG = RABGDG::updateOrCreate(["id" => $req->id], $data);
            return response()->json(["status" => "success", "msg" => "label ga kosong"],202);
        }
        $fileUploadArray = array(
            "sertifikat" => $req->sertifikat
            ,"simak_BMN" => $req->simak_bmn
            ,"PUPR" => $req->pupr
            ,"dokumen_IMB" => $req->imb
            ,"dokumen_AMDAL" => $req->amdal
            ,"dokumen_RKS" => $req->rks
            ,"proposal_project" => $req->proposal
            ,"rab_detail" => $req->rab
            ,"perencanaan_gambar" => $req->perencanaan
        );
        foreach ($fileUploadArray as $key => $val) {
            if($val == "")
            {
                return response()->json(["err" => "Harap mengisi semua file input"]);
            }
          }
        $datafinal = array_merge($data, $fileUploadArray);
        $insertRABGDG = RABGDG::updateOrCreate(["id" => $req->id], $datafinal);
    
        return response()->json(["data" => $datafinal]);
    }
    public function del(Request $req)
    {    
        $fileUploadArray = array(
            "Sertifikat" => $req->label_sertifikat
            ,"SIMAK_BMN" => $req->label_bmn
            ,"PUPR" => $req->label_pupr
            ,"DOKUMEN_IMB" => $req->label_imb
            ,"AMDAL" => $req->label_amdal
            ,"RKS" => $req->label_rks
            ,"PROPOSAL_PROJECT" => $req->label_proposal
            ,"RAB_DETAIL" => $req->label_rab
            ,"PERENCANAAN_GAMBAR" => $req->label_perencanaan
        );
        foreach ($fileUploadArray as $key => $value) {
            echo "$key => $value \n";
            if(file_exists(public_path().'/uploads/Rab_Gedung/'.$key.'/'.$value)){
                unlink(public_path().'/uploads/Rab_Gedung/'.$key.'/'.$value);
                echo "ok";
            }
        }
        RABGDG::where('id', $req->id)->delete();
        return response()->json(["msg" => "Menghapus dari database dan folder server"]);
    }
    // Fungsi untuk upload file
    public function sertifikat(Request $x)
    {
         if(!empty($_FILES['fileSertifikat'])){
            $maxSize = 307200;
            if(($_FILES['fileSertifikat']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['fileSertifikat']['name']);
            $targetFilePath = "uploads/Rab_Gedung/Sertifikat/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['fileSertifikat']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok sertifikat --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
        }
    }
    // ====> file upload simak bmn
    public function simak_bmn(Request $req)
    {
         if(!empty($_FILES['file_bmn'])){
            $maxSize = 307200;
            if(($_FILES['file_bmn']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_bmn']['name']);
            $targetFilePath = "uploads/Rab_Gedung/SIMAK_BMN/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_bmn']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok simak bmn --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload pupr
    public function uploadPUPR(Request $req)
    {
         if(!empty($_FILES['file_pupr'])){
            $maxSize = 307200;
            if(($_FILES['file_pupr']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_pupr']['name']);
            $targetFilePath = "uploads/Rab_Gedung/PUPR/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_pupr']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok pupr --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload imb
    public function uploadIMB(Request $req)
    {
         if(!empty($_FILES['file_imb'])){
            $maxSize = 307200;
            if(($_FILES['file_imb']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_imb']['name']);
            $targetFilePath = "uploads/Rab_Gedung/DOKUMEN_IMB/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_imb']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen imb --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload amdal
    public function uploadAMDAL(Request $req)
    {
         if(!empty($_FILES['file_amdal'])){
            $maxSize = 307200;
            if(($_FILES['file_amdal']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_amdal']['name']);
            $targetFilePath = "uploads/Rab_Gedung/AMDAL/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_amdal']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen amdal --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload rks
    public function uploadRKS(Request $req)
    {
         if(!empty($_FILES['file_rks'])){
            $maxSize = 307200;
            if(($_FILES['file_rks']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_rks']['name']);
            $targetFilePath = "uploads/Rab_Gedung/RKS/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_rks']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen rks --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload proposal
    public function uploadPROPOSAL()
    {
         if(!empty($_FILES['file_proposal'])){
            $maxSize = 307200;
            if(($_FILES['file_proposal']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_proposal']['name']);
            $targetFilePath = "uploads/Rab_Gedung/PROPOSAL_PROJECT/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_proposal']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen proposal --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload rab
    public function uploadRAB()
    {
         if(!empty($_FILES['file_rab'])){
            $maxSize = 307200;
            if(($_FILES['file_rab']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_rab']['name']);
            $targetFilePath = "uploads/Rab_Gedung/RAB_DETAIL/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_rab']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen rab detail --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    // ====> file upload perencanaan gambar
    public function uploadPERENCANAAN()
    {
         if(!empty($_FILES['file_perencanaan'])){
            $maxSize = 307200;
            if(($_FILES['file_perencanaan']['size'] >= $maxSize)) {
                return response()->json(['Ukuran file terlalu besar. Tidak lebih dari 300KB']);
            }
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_perencanaan']['name']);
            $targetFilePath = "uploads/Rab_Gedung/PERENCANAAN_GAMBAR/".$fileName;
            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_perencanaan']['tmp_name'], $targetFilePath)){
                    return response()->json(['ok dokumen perencanaan --']);
                }
            }else{
                return response()->json(['ext' => $allowTypes, "error" => "extension_error" ,"msg" => "Ekstensi yang diperbolehkan : " . $allowTypes['0'] . "."]);
            }
            return "error";
        }
    }
    
}
