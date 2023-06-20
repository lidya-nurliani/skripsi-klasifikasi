<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlasifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klasifikasi', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('dataken_id')->unsigned();
            $table->string('jenis_kendaraan');
            $table->string('tahun_pembuatan');
            $table->string('bahan_bakar');
            $table->string('komponen_mesin');
            $table->string('ban');
            $table->string('lampu_utama');
            $table->string('kondisi_rem');
            $table->string('kelayakan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dataken_id')->references('id')->on('dataken')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klasifikasi');
    }
}
