<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 45);
            $table->string('detalhamento');
            $table->string('preco_vista');
            $table->string('preco_prazo');
            $table->string('codigo_barras');

            $table->unsignedInteger('usuarios_id');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');

            $table->timestamp('created');
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
        Schema::dropIfExists('produtos');
    }
}
