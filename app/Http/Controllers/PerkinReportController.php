<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VerPerkin;
use App;
use Excel;
use App\Exports\PerkinExport;

class PerkinReportController extends Controller
{
  	public function index(){
                $ALL = DB::select( DB::raw("SELECT XTb_LAP_PERKIN.*, Tb_KKM.satuan, Tb_VERPERKIN.verifikasi_perencanaan, Tb_VERPERKIN.verifikasi_spi FROM XTb_LAP_PERKIN INNER JOIN Tb_KKM ON XTb_LAP_PERKIN.kd_ikk = Tb_KKM.kd_ikk INNER JOIN Tb_VERPERKIN ON XTb_LAP_PERKIN.kd_ikk = Tb_VERPERKIN.kd_ikk WHERE verifikasi_perencanaan = 'Approved' AND verifikasi_spi = 'Approved' ORDER BY kd_ikk"));
  		return view('PERKINRpt.index', compact('ALL'));
  	}

        public function pdf(){
                // $pp = DB::select( DB::raw("SELECT DISTINCT * from Tb_PERKIN WHERE PP_TGL = CURRENT_DATE() LIMIT 1"));
                $ALL = DB::select( DB::raw("SELECT XTb_LAP_PERKIN.*, Tb_KKM.satuan, Tb_VERPERKIN.verifikasi_perencanaan, Tb_VERPERKIN.verifikasi_spi FROM XTb_LAP_PERKIN INNER JOIN Tb_KKM ON XTb_LAP_PERKIN.kd_ikk = Tb_KKM.kd_ikk INNER JOIN Tb_VERPERKIN ON XTb_LAP_PERKIN.kd_ikk = Tb_VERPERKIN.kd_ikk WHERE verifikasi_perencanaan = 'Approved' AND verifikasi_spi = 'Approved' ORDER BY kd_ikk"));
                return view('PERKINRpt.pdf', compact('ALL'));
        }
        public function excel(){
                $nama_file = 'laporan_sembako_'.date('Y-m-d_H-i-s').'.xlsx';
                return Excel::download(new PerkinExport, $nama_file);
                // $pp = DB::select( DB::raw("SELECT * from Tb_PERKIN WHERE PP_TGL = CURRENT_DATE()"));
                // $ALL = DB::select( DB::raw("SELECT DISTINCT Tb_IKK.kd_ss,Tb_IKK.sasaran,Tb_KKM.satuan, Tb_VERPERKIN.* from Tb_IKK,Tb_VERPERKIN, Tb_KKM;"));
                // return view('PERKINRpt.excel', compact('ALL', 'pp'));
        }
}
