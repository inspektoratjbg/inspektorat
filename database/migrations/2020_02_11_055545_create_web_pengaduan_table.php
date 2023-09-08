<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebPengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_web_pengaduan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pelapor');
            $table->string('nik_pelapor');
            $table->string('kota_domisili');
            $table->string('jenis_kelamin');
            $table->string('email_pelapor');
            $table->string('kontak_pelapor');
            $table->text('alamat_pelapor');
            $table->string('pekerjaan_pelapor');
            $table->string('kategori_laporan');
            $table->string('klasifikasi_instansi');
            $table->string('nama_instansi');
            $table->string('nama_terlapor');
            $table->string('hubungan_pelapor');
            $table->text('harapan_pelapor');
            $table->text('uraian_peristiwa');
            $table->string('bukti_laporan');
            $table->string('ktp_pelapor');
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
        Schema::dropIfExists('web_pengaduan');
    }
}
