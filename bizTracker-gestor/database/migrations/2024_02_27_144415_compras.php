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
        Schema::create('compras', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id_compra');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->bigInteger('id_proveedor')->unsigned();


            $table->timestamps();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores')->onDelete("cascade");

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
