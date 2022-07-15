<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\RABKEG;
use Illuminate\Http\Request;

class RABKEGIATANController extends Controller
{
	public function index()
    {
        return view('RAB_KEGIATAN.index');
    }
}