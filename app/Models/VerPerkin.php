<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerPerkin extends Model
{
    use HasFactory;
    protected $table = "Tb_VERPERKIN";
    protected $fillable = [
        "id"  
        ,"kd_ikk"
        ,"indikator_kinerja_kegiatan"
        ,"kk_mendikbud"
        ,"kk_menkeu"  
        ,"bobot"
        ,"tw_1" 
        ,"tw_2"
        ,"tw_3" 
        ,"tw_4"
        ,"jumlah_bobot"
        ,"verifikasi_perencanaan"
        ,"verifikasi_spi"
        ,"tanggapan"
    ];
}
