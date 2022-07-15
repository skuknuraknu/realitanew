<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRabPeralatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_rab_peralatan', function (Blueprint $table) {
            $table->id();
            $table->string('rincian_kegiatan');
            $table->string('rincian_komponen');
            $table->string('kebutuhan_kegiatan');
            $table->string('akun');
            $table->string('jenis_belanja');
            $table->string('merk');
            $table->string('type');
            $table->string('eCatalog');
            $table->string('status_produk');
            $table->string('berkefungsian');
            $table->string('kuantitas');
            $table->string('satuan');
            $table->string('harga_satuan');
            $table->string('jumlah_biaya');
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
        Schema::dropIfExists('table_rab_peralatan');
    }
}
