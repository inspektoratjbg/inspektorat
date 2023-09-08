<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_kegiatan');
            $table->text('isi_kegiatan');
            $table->string('slug_kegiatan');
            $table->string('foto_kegiatan');
            $table->string('arsip_kegiatan');
            $table->string('tag_kegiatan');
            $table->string('status_kegiatan');
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
        Schema::dropIfExists('kegiatans');
    }
}
