<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_indikator_sakip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_sakip');
            $table->string('kinerja');
            $table->string('indikator_kinerja');
            $table->string('formulasi_perhitungan');
            $table->string('sumber_data');
            $table->string('penanggung_jawab');
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
        Schema::dropIfExists('indikator');
    }
}
