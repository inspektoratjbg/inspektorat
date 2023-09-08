<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTugasFungsiSakipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_indikator_tugas_fungsi_sakip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_sakip');
            $table->string('indikator');
            $table->string('tipe_indikator');
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
        Schema::dropIfExists('indikator_tugas_fungsi_sakip');
    }
}
