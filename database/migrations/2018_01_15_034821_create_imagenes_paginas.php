<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesPaginas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('imagenes_paginas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('leyenda')->nullable();
            $table->integer('paginas_id');
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
        Schema::drop('imagenes_paginas');
    
    }
}
