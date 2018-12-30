<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('produtos_id');
            $table->foreign('produtos_id')->references('id')->on('produtos');

            $table->unsignedInteger('clientes_id');
            $table->foreign('clientes_id')->references('id')->on('clientes');

            $table->integer('quantidade');
            $table->string('forma_pagamento');
            $table->string('detalhamento');
            $table->dateTime('data');
            $table->string('valor_total');

            $table->unsignedInteger('usuarios_id');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');

            $table->timestamp('created');
            $table->dateTime('updated');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
