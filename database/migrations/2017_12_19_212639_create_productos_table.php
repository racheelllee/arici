<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('contenido');
            $table->string('fecha_creacion')->nullable();
            $table->string('slug')->unique();
            $table->string('nombre_cliente')->nullable();
            $table->string('nombre_arquitecto')->nullable();
            $table->string('maitre_oeuvre')->nullable();
            $table->string('montant_ht')->nullable();
            $table->integer('categorias_id');
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
        Schema::drop('productos');
    }
}
