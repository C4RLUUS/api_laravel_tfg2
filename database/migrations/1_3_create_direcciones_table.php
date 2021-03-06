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
        // cambiar proviencias
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('usuarios'); 
            $table->string('pais'); 
            $table->string('proviencia'); 
            $table->string('ciudad'); 
            $table->string('postcode'); 
            $table->string('direccion1'); 
            $table->integer('telefono'); 
            $table->string('dni'); 
            $table->string('firstName'); 
            $table->string('lastName'); 
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
        Schema::dropIfExists('direccions');
    }
};
