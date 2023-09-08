<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_web_berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_berita');
            $table->text('isi_berita');
            $table->string('slug_berita');
            $table->string('foto_berita');
            $table->string('arsip_berita');
            $table->string('tag_berita');
            $table->string('status_berita');
            $table->date('tgl_publikasi');
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
        Schema::dropIfExists('web_berita');
    }
}
