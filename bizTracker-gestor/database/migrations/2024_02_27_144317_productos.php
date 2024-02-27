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
        Schema::create('productos', function(Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id_producto');
            $table->string('descripcion');
            $table->integer('stock');
            $table->decimal('precio');
            $table->bigInteger('id_categoria')->unsigned();

            $table->timestamps();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')->onDelete("cascade");
      
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
