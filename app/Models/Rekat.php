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
        ,"A1"
        ,"A2"
        ,"A3"
        ,"A4"
        ,"A5"
        ,"kd_rk"
        ,"rincian_komponen"    
        ,"akun"
        ,"verifikasi_perencanaan"
        ,"verifikasi_spi"
        ,"tanggapan"
    ];
}
