<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RANGKA extends Model
{
    use HasFactory;
    protected $table = "rangka";
    protected $fillable = 
    [
        "id"
        ,"kd_keg"
        ,"nama_keg"
        ,"kd_kro"
        ,"nama_kro"
        ,"kd_ro"
        ,"nama_ro"
        ,"kd_kp"
        ,"nama_kp"
        ,"kd_sk"
        ,"nama_sk"
        ,"kd_ak"
        ,"nama_ak"
        ,"kd_mak"
    ];
}
