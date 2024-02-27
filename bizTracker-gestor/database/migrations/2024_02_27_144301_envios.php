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
        Schema::create('envios', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id_envio');
            $table->bigInteger('id_cliente')->unsigned();
            $table->string('zona');
            $table->string('direccion');
            $table->integer('cantidad_paquetes');
            $table->decimal('costo_envio');
            $table->integer('telefono');
           

            $table->timestamps();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete("cascade");
         
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
