<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidadCompra')->nullable();
            $table->integer('precioCompra')->nullable();  
            $table->integer('FK_ProductoId')->unsigned()->nullable();                           
            $table->integer('FK_UsuarioId')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();     
            
            $table->foreign('FK_ProductoId')->references('id')
            ->on('TBL_Productos')->onUpdate('cascade');

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
        Schema::dropIfExists('TBL_Compras');
    }
}
