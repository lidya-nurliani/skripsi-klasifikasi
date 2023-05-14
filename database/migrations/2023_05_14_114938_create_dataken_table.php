<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataken', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan');
            $table->string('tahun_pembuatan');
            $table->string('no_polisi');
            $table->string('no_mesin');
            $table->string('no_rangka');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataken');
    }
}
