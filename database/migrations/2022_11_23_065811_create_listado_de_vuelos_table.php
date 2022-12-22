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
        Schema::create('listado_de_vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('vuelo');
            $table->string('avion');
            $table->string('origen');
            $table->string('destino');
            $table->string('duracion');
            $table->string('precio');
            $table->string('asientos');
            $table->date('fecha');
            $table->string('estado');
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
        Schema::dropIfExists('listado_de_vuelos');
    }
};
