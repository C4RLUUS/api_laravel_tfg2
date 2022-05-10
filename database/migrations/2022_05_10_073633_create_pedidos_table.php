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
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('usuarios'); 
            $table->foreignId('id_carrito')->constrained('carritos'); 
            $table->string('direccion'); 
            $table->string('direccion_facturacion'); 
            $table->string('current_state'); 
            $table->float('precio_total'); 
            $table->integer('productos_total'); 
            $table->timestamps();

            $table->foreign('direccion')->references('direccion')->on('direcciones'); 
            $table->foreign('direccion_facturacion')->references('direccion_facturacion')->on('direcciones'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
