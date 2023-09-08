<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspektoratSakip2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sakip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_sakip');
            $table->string('nip_pihak_pertama');
            $table->string('nama_pihak_pertama');
            $table->string('jabatan_pihak_pertama');
            $table->string('golongan_pihak_pertama');
            $table->string('nip_pihak_kedua');
            $table->string('nama_pihak_kedua');
            $table->string('jabatan_pihak_kedua');
            $table->string('golongan_pihak_kedua');
            $table->string('tahun');
            $table->date('tanggal_surat');
            $table->string('status1');
            $table->string('status2');
            $table->string('status3');
            $table->string('status4');
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
        Schema::dropIfExists('inspektorat_sakip2');
    }
}
