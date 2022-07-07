<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penandatanganan extends Model
{
    use HasFactory;
    protected $table = "Tb_PENANDATANGAN";
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
    ]; 
}
