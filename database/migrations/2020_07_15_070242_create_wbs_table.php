<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_web_wbs', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('token');
          $table->string('nama_pelapor');
          $table->string('nik_pelapor');
          $table->text('alamat_pelapor');
          $table->string('email_pelapor');
          $table->string('kontak_pelapor');
          $table->string('nama_instansi');
          $table->string('nama_terlapor');
          $table->text('uraian_peristiwa');
          $table->string('bukti_laporan');
          $table->string('ktp_pelapor');
          $table->text('catatan_feedback');
          $table->string('lampiran_feedback');
          $table->string('status');
          $table->string('publikasi');
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
        Schema::dropIfExists('wbs');
    }
}
