<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspektoratsSakipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspektorats_sakip', function (Blueprint $table) {
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
            $table->string('status');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('inspektorats_sakip');
    }
}
