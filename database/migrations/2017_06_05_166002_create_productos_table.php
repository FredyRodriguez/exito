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
            $table->string('cantidadBodega')->nullable();
            $table->string('cantidadExhibicion')->nullable();
            $table->string('totalProducto')->nullable(); 
            $table->string('precioProducto')->nullable();   
            $table->string('cantidadComprar')->nullable();
            $table->string('precioProductoComprar')->nullable();
            $table->integer('FK_UsuarioId')->unsigned();                          
            $table->rememberToken();
            $table->timestamps();            

            $table->foreign('FK_UsuarioId')->references('PK_id')
            ->on('TBL_Usuarios')->onUpdate('cascade');
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
