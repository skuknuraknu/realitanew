<?php

namespace App\Http\Controllers;

use App\Models\ModalRK;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function addModalRK(Request $req){
        ModalRK::create([
            "rk" => $req->rkVAL
        ]);
        return "OK RK";
    }
    public function getModalRK(Request $req){
        
    }
}
