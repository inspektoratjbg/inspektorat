<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat_masuk');
            $table->string('no_agenda');
            $table->date('tanggal_surat');
            $table->date('tanggal_masuk');
            $table->string('pengirim');
            $table->string('hal_surat');
            $table->string('lampiran');
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
        Schema::dropIfExists('surat_in');
    }
}
