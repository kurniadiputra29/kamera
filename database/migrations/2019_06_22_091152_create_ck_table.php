<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ck', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_transaksi');
            $table->unsignedInteger('id_anggota');
            $table->string('kendala');
            $table->string('solusi');
            $table->string('penanggung_jawab');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')->on('transaksi')->onDeletes('cascade');
            $table->foreign('id_anggota')->references('id')->on('anggota')->onDeletes('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ck');
    }
}
