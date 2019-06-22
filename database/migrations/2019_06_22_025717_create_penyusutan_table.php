<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyusutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyusutan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('NK');
            $table->unsignedInteger('id_detail');
            $table->integer('jumlah');
            $table->date('pemeriksaan');
            $table->string('keterangan');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('NK')->references('NK')->on('kamera')->onDelete('cascade');
            $table->foreign('id_detail')->references('id')->on('detail')->onDetail('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyusutan');
    }
}
