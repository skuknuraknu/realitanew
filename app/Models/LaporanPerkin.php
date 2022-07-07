<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPerkin extends Model
{
    use HasFactory;
    protected $table = "XTb_LAP_PERKIN";
    protected $fillable = 
    [
        "kd_ss"
        ,"sasaran"
        ,"kd_ikk"  
        ,"indikator_kinerja_kegiatan"  
        ,"kk_mendikbud"    
        ,"kk_menkeu"   
        ,"satuan"
        ,"tw_1"
        ,"tw_2"
        ,"tw_3"
        ,"tw_4"
        ,"bobot"
    ];
}
