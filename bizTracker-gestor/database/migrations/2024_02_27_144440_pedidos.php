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
        Schema::create('pedidos', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id_pedido');
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->bigInteger('id_cliente')->unsigned();
            $table->bigInteger('id_producto')->unsigned();
            $table->string('nombre_producto');
            $table->string('observaciones');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->bigInteger('id_pago')->unsigned();
            $table->bigInteger('id_envio')->unsigned();

            $table->timestamps();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete("cascade");
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete("cascade");
            $table->foreign('id_pago')->references('id_pago')->on('forma_pago')->onDelete("cascade");
            $table->foreign('id_envio')->references('id_envio')->on('envios')->onDelete("cascade");
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
