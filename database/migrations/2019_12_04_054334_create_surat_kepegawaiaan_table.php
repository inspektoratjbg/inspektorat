<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKepegawaiaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_kepegawaiaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat_kepegawaiaan');
            $table->string('no_agenda');
            $table->date('tanggal_surat');
            $table->string('bertanda_tangan');
            $table->string('tertuju');
            $table->string('hal_surat');
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
        Schema::dropIfExists('surat_kepegawaiaan');
    }
}
