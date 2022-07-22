<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RABKEG extends Model
{
    use HasFactory;
    protected $table = "Tb_RABKegiatan";
    protected $fillable = [
        "id"
        ,"rincian_kegiatan"
        ,"rincian_komponen"
        ,"kebutuhan_kegiatan"
        ,"akun"
        ,"jenis_belanja"
        ,"kuantitas"   
        ,"satuan_kuantitas"    
        ,"durasi"  
        ,"satuan_durasi"   
        ,"kegiatan"    
        ,"satuan_kegiatan" 
        ,"biaya_satuan"    
        ,"pajak"   
        ,"jumlah_biaya"    
        ,"PNBP_Uniker" 
        ,"PNBP_Univ" 
        ,"tor"  
        ,"verifikasi_tim"
        ,"verifikasi_pimpinan"
        ,"tanggapan"
    ];
}
