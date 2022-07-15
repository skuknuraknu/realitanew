<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Models\Perkin;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; 
use Maatwebsite\Excel\Concerns\FromView;
// auto size ukuran cell
use Maatwebsite\Excel\Concerns\WithColumnWidths;
// Memberikan style ke header
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
// menambah gambar
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class PerkinExport implements FromView, ShouldAutoSize, WithColumnWidths
{

    // public function drawings()
    // {
    //     $drawing = new Drawing();
    //     $drawing->setName('Logo');
    //     $drawing->setDescription('Unsyiah');
    //     $drawing->setPath(public_path('assets/img/usk.png'));
    //     $drawing->setHeight(200);
    //     $drawing->setCoordinates('A1');

    //     return $drawing;
    // }
     // public function styles(Worksheet $sheet)
    // {
    //     return [
    //         // Style the first row as bold text.
    //         10    => ['font' => ['bold' => true, 'size' => 13]],
    //         11    => ['font' => ['bold' => true, 'size' => 13]],
    //         12    => ['font' => ['bold' => true, 'size' => 13]],
    //     ];
    // }
    public function view(): View
    {
        // $pp = DB::select( DB::raw("SELECT * from Tb_PERKIN WHERE PP_TGL = CURRENT_DATE()"));
        $ALL = DB::select( DB::raw("SELECT XTb_LAP_PERKIN.*, Tb_KKM.satuan, Tb_VERPERKIN.verifikasi_perencanaan, Tb_VERPERKIN.verifikasi_spi FROM XTb_LAP_PERKIN INNER JOIN Tb_KKM ON XTb_LAP_PERKIN.kd_ikk = Tb_KKM.kd_ikk INNER JOIN Tb_VERPERKIN ON XTb_LAP_PERKIN.kd_ikk = Tb_VERPERKIN.kd_ikk WHERE verifikasi_perencanaan = 'Approved' AND verifikasi_spi = 'Approved' ORDER BY kd_ikk"));
         return view('PERKINRpt.excel', [
            'ALL' => $ALL
        ]);
    }
    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 45,            
        ];
    }
}
