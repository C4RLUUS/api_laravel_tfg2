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
            $table->foreignId('id_direccion')->constrained('direcciones'); 
            $table->string('current_state'); 
            $table->float('precio_total'); 
            $table->integer('productos_total'); 
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
        Schema::dropIfExists('pedidos');
    }
};
