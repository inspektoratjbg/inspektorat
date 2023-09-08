<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_sk');
            $table->string('no_agenda');
            $table->date('tanggal_surat');
            $table->string('bertanda_tangan');
            $table->string('opd');
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
        Schema::dropIfExists('sk');
    }
}
