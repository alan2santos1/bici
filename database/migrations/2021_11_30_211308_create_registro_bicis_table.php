<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistroBicisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_bicis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('ApellidoPaterno')->nullable();
            $table->string('ApellidoMaterno')->nullable();
            $table->string('Sexo');
            $table->integer('Telefono')->nullable();
            $table->string('Correo')->nullable();
            $table->integer('Edad')->nullable();
            $table->string('Identificacion')->nullable();
            $table->string('Alcaldia');
            $table->string('Calle')->nullable();
            $table->integer('Numero')->nullable();
            $table->integer('NumeroInterior')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('Cp')->nullable();
            $table->string('comprobante')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro_bicis');
    }
}
