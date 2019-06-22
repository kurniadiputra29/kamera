<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('NK');
            $table->date('tahun_pembuatan');
            $table->date('tanggal_terima');
            $table->integer('harga_pembelian');
            $table->boolean('status');
            $table->timestamps();

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
        Schema::dropIfExists('detail');
    }
}
