<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dieteticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieteticas', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('sujeto_id');
        $table->string('masApetito');
        $table->string('tardasComer');
        $table->string('alimentosPreferidos');
        $table->string('alimentosNoConsumidos');
        $table->string('alimentosConsumNoAgradan');
        $table->string('alimentosIndigestos');
        $table->string('consumoFrutas');
        $table->string('consumoVerduras');
        $table->string('tecnicas');
        $table->string('quienCocina');
        $table->string('tipoCoccion');
        $table->string('gustaCocinar');
        $table->string('gustaComprar');
        $table->string('frecuenciaCompra');
        $table->string('ingesta');
        $table->string('alergiaAlimentaria');
        $table->string('sustanEstimulante');
        $table->enum('horasSueño',['<5_horas','5-8_horas','>8_horas'])->default('<5_horas');
        $table->enum('calidadSueño',['buena','regular','mala','noSabe'])->default('buena');
        $table->enum('hidratacion',['<3_vasosDia','3-5_vasosDia','>5_vasosDia'])->default('<3_vasosDia');
        $table->enum('deposiciones',['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana'])->default('unaVezDia');
        $table->enum('consistenciaDep',['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera'])->default('normal');   
        
        //Relations

         $table->foreign('sujeto_id')->references('id')->on('sujetos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
           $table->foreign('dieta_id')->references('id')->on('dietas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dieteticas');
    }
}
