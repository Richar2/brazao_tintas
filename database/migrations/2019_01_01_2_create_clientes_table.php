<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('acesso_id');
            $table->string('nome', 100);
            $table->string('sobrenome', 100);
            $table->boolean('sexo');
            $table->date('data_nascimento');
            $table->bigInteger('cpf')->unique();
            $table->bigInteger('telefone_fixo');
            $table->bigInteger('telefone_cel');
            $table->timestamps();


            $table->foreign('acesso_id')->references('id')->on('acessoclientes')->onDelete ('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
