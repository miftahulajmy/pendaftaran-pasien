<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pasiens', function (Blueprint $table) {
            $table->increments('id_pasien');
            $table->char('no_rekam_medis');
            $table->string('nama_pasien');
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_pasiens');
    }
}
