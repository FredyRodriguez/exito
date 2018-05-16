<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealizarPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_RealizarPedido', function (Blueprint $table) {
            $table->increments('id');           
            $table->integer('FK_UsuarioId')->unsigned()->nullable();                          
            $table->integer('FK_CompraId')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();            

            $table->foreign('FK_UsuarioId')->references('PK_id')
            ->on('TBL_Usuarios')->onUpdate('cascade');

            $table->foreign('FK_CompraId')->references('id')
            ->on('TBL_Compras')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
