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
        Schema::create('bayis', function (Blueprint $table) {
            $table->string('id')->primary()->max(18); // to remove primary key 
            // $table->primary('id');
            $table->string('name_bayi'); //to add primary key
            $table->unsignedBigInteger('posyandu_id');
            $table->foreign('posyandu_id')->references('id')->on('posyandus');
            $table->string('nik_ibu')->max(18);
            $table->string('name_ibu');
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->string('alamat');
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
        Schema::dropIfExists('bayis');
    }
};
