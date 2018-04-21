<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Usuarios', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->string('name');
            $table->string('telefono')->nullable();
            $table->integer('documento')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('foto')->nullable();  
            $table->integer('FK_RolesId')->unsigned();
            $table->integer('FK_ComprasId')->unsigned()->nullable();
                    
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('FK_RolesId')->references('id')
            ->on('TBL_Roles')->onUpdate('cascade');

            $table->foreign('FK_ComprasId')->references('id')
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
        Schema::dropIfExists('TBL_Usuarios');
    }
}
