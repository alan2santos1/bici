<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('ApellidoPaterno')->nullable();
            $table->string('ApellidoMaterno')->nullable();
            $table->string('Sexo');
            $table->tinyInteger('Telefono')->nullable();
            $table->string('Correo')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->integer('Edad')->nullable();
            $table->string('Identificacion')->nullable();            
            $table->string('Alcaldia')->nullable();
            $table->string('Calle')->nullable();
            $table->integer('Numero')->nullable();
            $table->integer('NumeroInterior')->nullable();
            $table->string('Colonia')->nullable(); 
            $table->integer('Cp')->nullable();
            $table->string('ComprobanteDomicilio')->nullable();
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
}
