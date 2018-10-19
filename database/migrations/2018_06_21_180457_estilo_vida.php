<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstiloVida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("create view `EstiloVida` as
        select `sujetos`.`nombre`,`sujetos`.`apellidos`,`sujetos`.`codigo`,`sujetos`.`fechaNac` as `fechaNac`,`sexos`.`sexo`,`nacionalidades`.`nacionalidad`,`comunidades`.`comunidadAutonoma`,`poblaciones`.`poblaciones`,`laborales`.`situacionLaboral`,`dantropometricos`.`peso`,`dantropometricos`.`talla`,`dantropometricos`.`imc`,`dantropometricos`.`metBasal`,`dantropometricos`.`masaGrasa`,`dantropometricos`.`masaLibre`,`dantropometricos`.`masaMusculo`,`dantropometricos`.`masaOsea`,`dantropometricos`.`agua`,
        `estudios`.`nivelEstudio`,`estudios`.`estudioActual`,`estudios`.`nivelEstudioPadre`,`estudios`.`nivelEstudioMadre`,`estudios`.`NS_NC`,
        `deportes`.`practica`,`deportes`.`edad`,`dieteticas`.`masApetito`,`dieteticas`.`tardasComer`,`dieteticas`.`alimentosPreferidos`,`dieteticas`.`alimentosNoConsumidos`,`dieteticas`.`alimentosConsumNoAgradan`,
        `dieteticas`.`alimentosIndigestos`,`dieteticas`.`consumoFrutas`,`dieteticas`.`consumoVerduras`,`dieteticas`.`tecnicas`,`dieteticas`.`quienCocina`,
        `dieteticas`.`tipoCoccion`,`dieteticas`.`gustaCocinar`,`dieteticas`.`gustaComprar`,`dieteticas`.`frecuenciaCompra`,`dieteticas`.`ingesta`, `dieteticas`.`alergiaAlimentaria`,`dieteticas`.`sustanEstimulante`,`dieteticas`.`horasSueño`,`dieteticas`.`calidadSueño`,`dieteticas`.`hidratacion`,`dieteticas`.`deposiciones`,`dietas`.`frecuencia`,`dietas`.`adherencia`,
        `sujetos`.`created_at`,`sujetos`.`updated_at`
        from `sujetos`
        inner join `sexos` on `sujetos`.`sexos_id`=`sexos`.`id`
        inner join `nacionalidades` on `sujetos`.`nacionalidades_id`=`nacionalidades`.`id`
        inner join `comunidades` on `sujetos`.`comunidades_id`=`comunidades`.`id`
        inner join `poblaciones` on `sujetos`.`poblaciones_id`=`poblaciones`.`id`
        inner join `laborales` on `sujetos`.`laborales_id`=`laborales`.`id`
        inner join `dantropometricos` on `sujetos`.`dantropometricos_id`=`dantropometricos`.`id`
        inner join  `deportes` on `sujetos`.`deportes_id`= `deportes`.`id`
        inner join  `estudios` on `sujetos`.`estudios_id`=`estudios`.`id`
        inner join `dieteticas` on `sujetos`.`dieteticas_id`= `dieteticas`.`id`
        inner join `dietas` on `sujetos`.`dietas_id`= `dietas`.`id` and `dietas`.`id`=`dieteticas`.`id`
        ");  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW estiloVida");
    }
}
