<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjanjianPengukuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_perjanjian_pengukuran_perubahan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_sakip');
            $table->string('sasaran');
            $table->string('indikator_kinerja');
            $table->string('satuan');
            $table->string('target');
            $table->string('realisasi');
            $table->string('capaian');
            $table->string('urutan_per_tahun');
            $table->string('created_by');
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
        Schema::dropIfExists('perjanjian_pengukuran');
    }
}
