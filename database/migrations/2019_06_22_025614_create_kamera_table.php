<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKameraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamera', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_pemilik');
            $table->string('NK')->unique();
            $table->string('name');
            $table->string('type');
            $table->integer('jumlah');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('id_pemilik')->references('id')->on('pemilik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamera');
    }
}
