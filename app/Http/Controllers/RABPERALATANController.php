<?php

namespace App\Http\Controllers;

use App\Models\RABPER;
use Illuminate\Http\Request;

class RABPERALATANController extends Controller
{
    public function index()
    {
        return view('RAB_PERALATAN.index');
    }
}
