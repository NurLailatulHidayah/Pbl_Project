<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('bayi_id')->max(18);
            $table->foreign('bayi_id')->references('id')->on('bayis');
            $table->unsignedBigInteger('posyandu_id');
            $table->foreign('posyandu_id')->references('id')->on('posyandus');
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->string('posisi');
            $table->string('umur');
            $table->date('tanggal_pemeriksaan');
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
        Schema::dropIfExists('laporans');
    }
};
