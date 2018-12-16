<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageneProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagene_products', function (Blueprint $table) {
          
           
            $table->increments('id');
            $table->string('image1',180);
            $table->string('image2',180);
            $table->string('image3',180);
            $table->string('image4',180);
            $table->string('image5',180);
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
        Schema::dropIfExists('imagene_products');
    }
}
