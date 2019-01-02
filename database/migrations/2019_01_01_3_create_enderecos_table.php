<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_endereco',100);
            $table->string('endereco',100);
            $table->string('referencia',100);
            $table->string('complemento',100);
            $table->string('bairro',100);
            $table->string('cidade',100);
            $table->string('estado',20);
            $table->bigInteger('numero');
            $table->bigInteger('cep');
            $table->timestamps();

            
            $table->unsignedInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
