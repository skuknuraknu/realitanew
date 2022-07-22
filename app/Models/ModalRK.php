<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalRK extends Model
{
    use HasFactory;
    protected $table = "XTb_modal_rk";
    protected $fillable = 
    [
        "rk",
    ];
}
