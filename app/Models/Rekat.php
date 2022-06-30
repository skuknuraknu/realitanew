<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekat extends Model
{
    use HasFactory;
    protected $table = "Tb_REKAT";
    protected $fillable = [
        "id"
        ,"kd_ikk"
        ,"indikator_kinerja_kegiatan"
        ,"kd_program"
        ,"program"
        ,"kd_keg"
        ,"rincian_kegiatan"
        ,"TOR"
        ,"kd_rk"
        ,"rincian_komponen"    
    ];
}
