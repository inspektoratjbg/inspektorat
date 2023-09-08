<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_profil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_profil');
            $table->text('isi_profil');
            $table->string('slug_profil');
            $table->string('foto_profil');
            $table->string('arsip_profil');
            $table->string('tag_profil');
            $table->string('status_profil');
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
        Schema::dropIfExists('profils');
    }
}
