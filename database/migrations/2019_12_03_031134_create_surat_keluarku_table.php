<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat_keluar');
            $table->date('tanggal_keluar');
            $table->string('hal_surat');
            $table->string('lampiran');
            $table->string('tertuju');
            $table->string('alamat');
            $table->string('no_agenda');
            $table->string('disposisi');
            $table->string('isi_disposisi');
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
        Schema::dropIfExists('surat_keluarku');
    }
}
