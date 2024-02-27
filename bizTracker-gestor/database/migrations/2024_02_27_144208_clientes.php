<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        //
        Schema::create('clientes', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id_cliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            

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
        //
    }
};
