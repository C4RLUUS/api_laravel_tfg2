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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->text('descripcion'); 
            $table->float('precio'); 
            $table->integer('stock'); 
            $table->text('imagen'); 
            $table->boolean('dulce'); 
            $table->boolean('salado');
            $table->boolean('frio'); 
            $table->boolean('caliente'); 
            $table->integer('low_stock_alert'); 
            $table->boolean('active')->default(1); 
            $table->boolean('deleted')->default(0); 
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
        Schema::dropIfExists('productos');
    }
};
