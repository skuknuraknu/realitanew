<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKM extends Model
{
    use HasFactory;
    protected $table = "Tb_KKM";
    protected $fillable = 
    [
        "id"  
        ,"kd_ikk"  
        ,"indikator_kinerja_kegiatan"  
        ,"kk_mendikbud"    
        ,"kk_menkeu"   
        ,"satuan"  
        ,"bobot"
    ];
}
