<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat_tugas');
            $table->string('no_agenda');
            $table->date('tanggal_surat');
            $table->string('pemberi_tugas');
            $table->string('penerima_tugas');
            $table->string('hal_surat');
            $table->string('lampiran');
            $table->string('jenis_surat');
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
        Schema::dropIfExists('surat_tugas');
    }
}
