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
        Schema::create('TBL_Productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cantidadBodega')->nullable();
            $table->integer('cantidadExhibicion')->nullable();
            $table->integer('totalProducto')->nullable(); 
            $table->integer('precioProducto')->nullable();                              
            $table->rememberToken();
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
        Schema::dropIfExists('TBL_Productos');
    }
}
