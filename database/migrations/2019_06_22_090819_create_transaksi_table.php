<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('NA');
            $table->unsignedInteger('id_user');
            $table->string('NK');
            $table->date('tgl_sewa');
            $table->date('tgl_kembali');
            $table->string('masa_pinjam');
            $table->timestamps();

            $table->foreign('NA')->references('NA')->on('anggota')->onDeletes('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDeletes('cascade');
            $table->foreign('NK')->references('NK')->on('kamera')->onDeletes('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
