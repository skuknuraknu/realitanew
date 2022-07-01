<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkin extends Model
{
    use HasFactory;
    protected $table = "Tb_PERKIN";
    protected $fillable = 
    [
        "id"
        ,"PP_TPT"
        ,"PP_TGL"
        ,"PP_REKTOR"
        ,"PP_JBT"
        ,"PP_NIP"
        ,"PK_NAMA"
        ,"PK_JBT"
        ,"PK_NIP"
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
        ,"jumlah_bobot"
    ];
}
