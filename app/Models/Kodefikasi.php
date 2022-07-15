<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodefikasi extends Model
{
    use HasFactory;
    protected $table = "Tb_KODEFIKASI_JENISBELANJA";
    protected $fillable = 
    [
        "id" 
        ,"A1" 
        ,"kodefikasi_1" 
        ,"A2"
        ,"kodefikasi_2" 
        ,"A3" 
        ,"kodefikasi_3" 
        ,"A4" 
        ,"kodefikasi_4" 
        ,"A5" 
        ,"kodefikasi_5" 
        ,"akun" 
        ,"jenis_belanja" 
        ,"jenis_rab" 
    ];
}
