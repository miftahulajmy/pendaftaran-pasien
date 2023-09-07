<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_pendaftarans', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->char('no_registrasi');
            $table->timestamp('waktu_registrasi');
            $table->boolean('status_registrasi');
            $table->integer('id_layanan')->unsigned();
            $table->foreign('id_layanan')->references('id_layanan')->onUpdate('cascade')->onDelete('cascade')->on('master_layanans');
            $table->integer('id_pembayaran')->unsigned();
            $table->foreign('id_pembayaran')->references('id_pembayaran')->onUpdate('cascade')->onDelete('cascade')->on('master_jenis_pembayarans');
            $table->integer('id_registrasi')->unsigned();
            $table->foreign('id_registrasi')->references('id_registrasi')->onUpdate('cascade')->onDelete('cascade')->on('master_jenis_registrasis');
            $table->integer('id_pasien')->unsigned();
            $table->foreign('id_pasien')->references('id_pasien')->onUpdate('cascade')->onDelete('cascade')->on('master_pasiens');
            $table->integer('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id_petugas')->onUpdate('cascade')->onDelete('cascade')->on('master_petugas');
            $table->integer('id_pelayanan')->unsigned();
            $table->foreign('id_pelayanan')->references('id_pelayanan')->onUpdate('cascade')->onDelete('cascade')->on('trx_pelayanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_pendaftarans');
    }
}
