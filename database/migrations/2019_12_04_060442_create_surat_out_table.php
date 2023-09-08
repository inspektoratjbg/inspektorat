<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratOutTable extends Migration
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
            $table->string('no_agenda');
            $table->date('tanggal_keluar');
            $table->string('hal_surat');
            $table->string('tertuju');
            $table->string('alamat');
            $table->string('lampiran');
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
        Schema::dropIfExists('surat_out');
    }
}
