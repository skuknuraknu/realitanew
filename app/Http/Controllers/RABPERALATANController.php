<?php

namespace App\Http\Controllers;

use App\Models\RABPER;
use Illuminate\Http\Request;

class RABPERALATANController extends Controller
{
    public function index()
    {
        $RABPER = RABPER::all();
        return view('RAB_PERALATAN.index', compact('RABPER'));
    }
    public function pdf(Request $x)
    {
         if(!empty($_FILES['file_catalog'])){
            $upload = 'err';
            $maxSize = 307200;
            if(($_FILES['file_catalog']['size'] >= $maxSize)) {
                return  'Ukuran file terlalu besar. Tidak lebih dari 300 KB';
            }

            $targetDir = "uploads/Rab_Peralatan/eCatalog/";
            $allowTypes = array('pdf');
            $fileName = basename($_FILES['file_catalog']['name']);
            $targetFilePath = $targetDir.$fileName;

            //memeriksa apakah tipe file valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // upload file ke server
                if(move_uploaded_file($_FILES['file_catalog']['tmp_name'], $targetFilePath)){
                    $upload = 'ok';
                }
                return array("|OK|");
            }
        }
        return response()->json(['ok']);
    }
    public function add(Request $req){
        $data = [
            "rincian_kegiatan" => $req->rincian_kegiatan
            ,"rincian_komponen" => $req->rincian_komponen
            ,"kebutuhan_kegiatan" => $req->kebutuhan_kegiatan
            ,"akun" => $req->akun
            ,"jenis_belanja" => $req->jenis_belanja
            ,"merk" => $req->merk
            ,"type" => $req->type
            ,"status_produk" => $req->status_produk
            ,"berkefungsian" => $req->berkefungsian
            ,"kuantitas" => $req->kuantitas
            ,"satuan" => $req->satuan
            ,"harga_satuan" => $req->harga_satuan
            ,"jumlah_biaya" => $req->jumlah_biaya
        ];
        if(empty($req->catalog)){
            $catalog = array("eCatalog" => $req->label_catalog);
            $finalArray = array_merge($data, $catalog);
            $insertRABPER = RABPER::updateOrCreate(["id" => $req->id], $finalArray);
            return array("|OK|", $finalArray);
        }
        $fileCatalog = array("eCatalog" => $req->catalog);
        $datafinal = array_merge($data, $fileCatalog);
        $insertRABPER = RABPER::updateOrCreate(["id" => $req->id], $datafinal);
        return array("|OK|", $datafinal);
    }
    public function del(Request $req){
        $url = public_path().'/uploads/Rab_Peralatan/eCatalog/'.$req->labelcatalog;
        if(file_exists($url)){
            unlink($url);
            RABPER::where('id', $req->id)->delete();
        }
        RABPER::where('id', $req->id)->delete();
        return array("|OK|", $url);
    }
}
