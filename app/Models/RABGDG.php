<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RABGDG extends Model
{
    use HasFactory;
    protected $table = "Tb_RABGedung";
    protected $fillable = [
        "rincian_kegiatan"
        ,"rincian_komponen"
        ,"kebutuhan_kegiatan"
        ,"akun"
        ,"jenis_belanja"
        ,"alamat"
        ,"latlong"
        ,"luas_bangunan"
        ,"jumlah_gedung"
        ,"jumlah_lantai"
        ,"ruang_kuliah"
        ,"ruang_lab"
        ,"ruang_kantor"
        ,"lainnya"
        ,"kesesuaian_gedung"
        ,"sertifikat"
        ,"simak_BMN"
        ,"PUPR"
        ,"dokumen_IMB"
        ,"dokumen_AMDAL"
        ,"dokumen_RKS"
        ,"DED_AWAL"
        ,"DED_REVIEW"
        ,"nilai_perencanaan"
        ,"nilai_struktur"
        ,"nilai_me"
        ,"nilai_landscape"
        ,"nilai_pengawasan"
        ,"proposal_project"
        ,"rab_detail"
        ,"perencanaan_gambar"
        ,"jumlah_nilai"
        ,"verifikasi_tim"
        ,"verifikasi_pimpinan"
        ,"tanggapan"
    ];
}
