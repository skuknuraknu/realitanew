<?php

namespace App\Http\Controllers;

use App\Models\RABGDG;
use Illuminate\Http\Request;

class RABGEDUNGController extends Controller
{
    public function index()
    {
        return view('RAB_GEDUNG.index');
    }
}
