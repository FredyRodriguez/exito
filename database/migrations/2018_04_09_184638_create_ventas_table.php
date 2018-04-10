<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precioVenta')->nullable();
            $table->integer('precioCompra')->nullable();
            $table->integer('valorGenerado')->nullable(); 
            $table->integer('FK_ProductosId')->unsigned();
                    
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('FK_ProductosId')->references('id')
            ->on('TBL_Productos')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBL_Ventas');
    }
}
