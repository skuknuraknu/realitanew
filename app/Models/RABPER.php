<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RABPER extends Model
{
    use HasFactory;
    protected $table = "Tb_RABPeralatan";
    protected $fillable = [
        "id"
        ,"rincian_kegiatan"
        ,"rincian_komponen"
        ,"kebutuhan_kegiatan"
        ,"akun"	
        ,"jenis_belanja"
        ,"merk"
        ,"type"
        ,"eCatalog"	
        ,"status_produk"
        ,"berkefungsian"	
        ,"kuantitas"	
        ,"satuan"	
        ,"harga_satuan"	
        ,"jumlah_biaya"
        ,"verifikasi_tim"
        ,"verifikasi_pimpinan"
        ,"tanggapan"
    ];
}
