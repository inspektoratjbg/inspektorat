<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_undangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat_undangan');
            $table->string('no_agenda');
            $table->date('tanggal_surat');
            $table->string('pemberi');
            $table->string('tertuju');
            $table->string('hal_surat');
            $table->string('lampiran');
            $table->string('jenis_undangan');
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
        Schema::dropIfExists('undangan');
    }
}
