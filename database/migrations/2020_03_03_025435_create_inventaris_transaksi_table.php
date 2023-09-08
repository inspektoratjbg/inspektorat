<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inventaris_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_diterima');
            $table->string('id_barang');
            $table->string('merk');
            $table->date('tahun_pembuatan');
            $table->string('saldo_awal');
            $table->string('barang_masuk');
            $table->string('harga_satuan');
            $table->string('irban_pemb');
            $table->string('irban_ek');
            $table->string('irban_keu');
            $table->string('irban_pem');
            $table->string('sekret');
            $table->string('sisa');
            $table->string('no_surat');
            $table->string('keterangan');
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
        Schema::dropIfExists('inventaris_transaksi');
    }
}
