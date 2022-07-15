<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRabGedung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_RABGedung', function (Blueprint $table) {
            $table->id();
            $table->string('rincian_kegiatan');
            $table->string('rincian_komponen');
            $table->string('kebutuhan_kegiatan');
            $table->string('akun');
            $table->string('jenis_belanja');
            $table->string('alamat');
            $table->string('latlong');
            $table->string('luas_bangunan');
            $table->string('jumlah_gedung');
            $table->string('jumlah_lantai');
            $table->string('ruang_kuliah');
            $table->string('ruang_lab');
            $table->string('ruang_kantor');
            $table->string('lainnya');
            $table->string('kesesuaian_gedung');
            $table->string('sertifikat');
            $table->string('simak_BMN');
            $table->string('PUPR');
            $table->string('dokumen_IMB');
            $table->string('dokumen_AMDAL');
            $table->string('dokumen_RKS');
            $table->string('DED_AWAL');
            $table->string('DED_REVIEW');
            $table->string('nilai_perencanaan');
            $table->string('nilai_struktur');
            $table->string('nilai_me');
            $table->string('nilai_landscape');
            $table->string('nilai_pengawasan');
            $table->string('proposal_project');
            $table->string('rab_detail');
            $table->string('perencanaan_gambar');
            $table->string('jumlah_nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_rab_gedung');
    }
}
