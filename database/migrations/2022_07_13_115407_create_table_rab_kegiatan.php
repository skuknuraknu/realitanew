<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRabKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_RABKegiatan', function (Blueprint $RABKegiatan) {
            $RABKegiatan->id();
            $RABKegiatan->string('rincian_kegiatan');
            $RABKegiatan->string('rincian_komponen');
            $RABKegiatan->string('kebutuhan_kegiatan');
            $RABKegiatan->string('akun',10);
            $RABKegiatan->string('jenis_belanja');
            $RABKegiatan->string('kuantitas');
            $RABKegiatan->string('satuan_kuantitas');
            $RABKegiatan->string('durasi');
            $RABKegiatan->string('satuan_durasi');
            $RABKegiatan->string('kegiatan');
            $RABKegiatan->string('satuan_kegiatan');
            $RABKegiatan->string('biaya_satuan');
            $RABKegiatan->string('pajak');
            $RABKegiatan->string('jumlah_biaya');
            $RABKegiatan->string('PNBP_Uniker');
            $RABKegiatan->string('PNBP_Univ');
            $RABKegiatan->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_rab_kegiatan');
    }
}
