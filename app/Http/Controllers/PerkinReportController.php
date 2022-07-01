<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VerPerkin;

class PerkinReportController extends Controller
{
  	public function index(){

        $ALL = DB::select( DB::raw("SELECT DISTINCT Tb_IKK.kd_ss,Tb_IKK.sasaran, Tb_VERPERKIN.* from Tb_IKK,Tb_VERPERKIN"));
  		return view('PERKINRpt.index', compact('ALL'));
  	}
}
