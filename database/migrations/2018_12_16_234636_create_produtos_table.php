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
        {
            Schema::create('produtos', function (Blueprint $table) {
          
               
                $table->increments('id');
                $table->unsignedInteger('categoria_id')->nullable();
                $table->unsignedInteger('image_id')->nullable();
                $table->string('nome_pro',120)->nullable();
                $table->string('descricao_pro',350)->nullable();
                $table->decimal('quantidade_pro',5,2)->nullable();
                $table->decimal('peso_pro',5,2)->nullable();
                $table->decimal('altura_pro',5,2)->nullable();
                $table->decimal('largura_pro',5,2)->nullable();
                $table->decimal('profundidade_pro',5,2)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();


                
            });
        }
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



//$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete ('cascade');
                //$table->foreign('image_id')->references('id')->on('imagene_products')-> onDelete ('cascade');