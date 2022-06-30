<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PerkinReportController extends Controller
{
  	public function index(){
  		return view('PERKINRpt.index');
  	}
}
