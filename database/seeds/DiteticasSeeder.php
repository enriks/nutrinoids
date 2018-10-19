<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DiteticasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
      //  \DB::table('dieteticas')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('dieteticas')->insert(array(
                'masApetito'     => $faker->randomElement(['mañana','mediodía','tarde','noche','entreHoras']),
                'tardasComer'    => $faker->randomElement(['poco(<15minutos)','normal(20-30minutos)','mucho(>30minutos)']),
                'alimentosPreferidos' => $faker->text,
                'alimentosNoConsumidos' => $faker->text,
                'alimentosConsumNoAgradan' => $faker->text,
                'alimentosIndigestos' => $faker->text,
                'consumoFrutas'=>$faker->randomElement(['0','1']),
                'consumoVerduras'=>$faker->randomElement(['0','1']),
                'tecnicas'=> $faker->randomElement(['Sencillas:hervido_vapor_plancha_horno','complejas:frituas_gratinados_empanados']),     
                'quienCocina'=> $faker->randomElement(['tu','unoOmasDeUnFamiliar','unaPersonaContratada']),
                'tipoCoccion'=> $faker->randomElement(['plancha','fritos','guisos_estofados','vapor','horno','microndas','hervido','papillote']),
                'gustaCocinar'=>$faker->randomElement(['noLeGusta_Obligado','leGustaCocinarNormal','leGustaMucho']), 
                'gustaComprar'=> 'la abuela',
                'frecuenciaCompra'=> $faker->randomElement(['unaVezSemana','dosVecesSemana','tresVecesMasSemana','diario','unaVezMes']),
                'ingesta'=>$faker->randomElement(['<3ComidasDia','3ComidasDia','3-5ComidasDia','>5ComidasDia']),
                'alergiaAlimentaria'=> $faker->sentence,
                'sustanEstimulante'=>$faker->randomElement(['café','redBull','té','chocolate','monster','burn']),  
                'horasSueño'=>  $faker->randomElement(['<5_horas','5-8_horas','>8_horas']),
                'calidadSueño'=>  $faker->randomElement(['buena','regular','mala','noSabe']), 
                'hidratacion'=>  $faker->randomElement(['<3_vasosDia','3-5_vasosDia','>5_vasosDia']),
                'deposiciones'=> $faker->randomElement(['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana']),
                'consistenciaDep'=> $faker->randomElement(['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera']),
                'dietas_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])

            ));      
        }
         /*   for ($i=0; $i < 10; $i ++){

                \DB::table('dieteticas')->insert(array(
                    'masApetito'     => $faker->randomElement(['mañana','mediodía','tarde','noche','entreHoras']),
                    'tardasComer'    => $faker->randomElement(['poco(<15minutos)','normal(20-30minutos)','mucho(>30minutos)']),
                    'alimentosPreferidos' => $faker->text,
                    'alimentosNoConsumidos' => $faker->text,
                    'alimentosConsumNoAgradan' => $faker->text,
                    'alimentosIndigestos' => $faker->text,
                    'consumoFrutas'=>$faker->randomElement(['0','1']),
                    'consumoVerduras'=>$faker->randomElement(['0','1']),
                    'tecnicas'=> $faker->randomElement(['Sencillas:hervido_vapor_plancha_horno','complejas:frituas_gratinados_empanados']),     
                    'quienCocina'=> $faker->randomElement(['tu','unoOmasDeUnFamiliar','unaPersonaContratada']),
                    'tipoCoccion'=> $faker->randomElement(['plancha','fritos','guisos_estofados','vapor','horno','microndas','hervido','papillote']),
                    'gustaCocinar'=>$faker->randomElement(['noLeGusta_Obligado','leGustaCocinarNormal','leGustaMucho']), 
                    'gustaComprar'=> 'mi esposa',
                    'frecuenciaCompra'=> $faker->randomElement(['unaVezSemana','dosVecesSemana','tresVecesMasSemana','diario','unaVezMes']),
                    'ingesta'=>$faker->randomElement(['<3ComidasDia','3ComidasDia','3-5ComidasDia','>5ComidasDia']),
                    'alergiaAlimentaria'=> $faker->sentence,
                    'sustanEstimulante'=>$faker->randomElement(['café','redBull','té','chocolate','monster','burn']),  
                    'horasSueño'=>  $faker->randomElement(['<5_horas','5-8_horas','>8_horas']),
                    'calidadSueño'=>  $faker->randomElement(['buena','regular','mala','noSabe']), 
                    'hidratacion'=>  $faker->randomElement(['<3_vasosDia','3-5_vasosDia','>5_vasosDia']),
                    'deposiciones'=> $faker->randomElement(['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana']),
                    'consistenciaDep'=> $faker->randomElement(['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera']),
                    'dietas_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])
    
                ));  
            }    

        for ($i=0; $i < 10; $i ++){

                \DB::table('dieteticas')->insert(array(
                    'masApetito'     => $faker->randomElement(['mañana','mediodía','tarde','noche','entreHoras']),
                    'tardasComer'    => $faker->randomElement(['poco(<15minutos)','normal(20-30minutos)','mucho(>30minutos)']),
                    'alimentosPreferidos' => $faker->text,
                    'alimentosNoConsumidos' => $faker->text,
                    'alimentosConsumNoAgradan' => $faker->text,
                    'alimentosIndigestos' => $faker->text,
                    'consumoFrutas'=>$faker->randomElement(['0','1']),
                    'consumoVerduras'=>$faker->randomElement(['0','1']),
                    'tecnicas'=> $faker->randomElement(['Sencillas:hervido_vapor_plancha_horno','complejas:frituas_gratinados_empanados']),     
                    'quienCocina'=> $faker->randomElement(['tu','unoOmasDeUnFamiliar','unaPersonaContratada']),
                    'tipoCoccion'=> $faker->randomElement(['plancha','fritos','guisos_estofados','vapor','horno','microndas','hervido','papillote']),
                    'gustaCocinar'=>$faker->randomElement(['noLeGusta_Obligado','leGustaCocinarNormal','leGustaMucho']), 
                    'gustaComprar'=> 'mis hijos',
                    'frecuenciaCompra'=> $faker->randomElement(['unaVezSemana','dosVecesSemana','tresVecesMasSemana','diario','unaVezMes']),
                    'ingesta'=>$faker->randomElement(['<3ComidasDia','3ComidasDia','3-5ComidasDia','>5ComidasDia']),
                    'alergiaAlimentaria'=> $faker->sentence,
                    'sustanEstimulante'=>$faker->randomElement(['café','redBull','té','chocolate','monster','burn']),  
                    'horasSueño'=>  $faker->randomElement(['<5_horas','5-8_horas','>8_horas']),
                    'calidadSueño'=>  $faker->randomElement(['buena','regular','mala','noSabe']), 
                    'hidratacion'=>  $faker->randomElement(['<3_vasosDia','3-5_vasosDia','>5_vasosDia']),
                    'deposiciones'=> $faker->randomElement(['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana']),
                    'consistenciaDep'=> $faker->randomElement(['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera']),
                    'dietas_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])
    
                ));  
            }    
                for ($i=0; $i < 10; $i ++){

                    \DB::table('dieteticas')->insert(array(
                        'masApetito'     => $faker->randomElement(['mañana','mediodía','tarde','noche','entreHoras']),
                        'tardasComer'    => $faker->randomElement(['poco(<15minutos)','normal(20-30minutos)','mucho(>30minutos)']),
                        'alimentosPreferidos' => $faker->text,
                        'alimentosNoConsumidos' => $faker->text,
                        'alimentosConsumNoAgradan' => $faker->text,
                        'alimentosIndigestos' => $faker->text,
                        'consumoFrutas'=>$faker->randomElement(['0','1']),
                        'consumoVerduras'=>$faker->randomElement(['0','1']),
                        'tecnicas'=> $faker->randomElement(['Sencillas:hervido_vapor_plancha_horno','complejas:frituas_gratinados_empanados']),     
                        'quienCocina'=> $faker->randomElement(['tu','unoOmasDeUnFamiliar','unaPersonaContratada']),
                        'tipoCoccion'=> $faker->randomElement(['plancha','fritos','guisos_estofados','vapor','horno','microndas','hervido','papillote']),
                        'gustaCocinar'=>$faker->randomElement(['noLeGusta_Obligado','leGustaCocinarNormal','leGustaMucho']), 
                        'gustaComprar'=> 'el abuelo',
                        'frecuenciaCompra'=> $faker->randomElement(['unaVezSemana','dosVecesSemana','tresVecesMasSemana','diario','unaVezMes']),
                        'ingesta'=>$faker->randomElement(['<3ComidasDia','3ComidasDia','3-5ComidasDia','>5ComidasDia']),
                        'alergiaAlimentaria'=> $faker->sentence,
                        'sustanEstimulante'=>$faker->randomElement(['café','redBull','té','chocolate','monster','burn']),  
                        'horasSueño'=>  $faker->randomElement(['<5_horas','5-8_horas','>8_horas']),
                        'calidadSueño'=>  $faker->randomElement(['buena','regular','mala','noSabe']), 
                        'hidratacion'=>  $faker->randomElement(['<3_vasosDia','3-5_vasosDia','>5_vasosDia']),
                        'deposiciones'=> $faker->randomElement(['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana']),
                        'consistenciaDep'=> $faker->randomElement(['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera']),
                        'dietas_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])
        
                    )); 
                }
                    for ($i=0; $i < 10; $i ++){

                        \DB::table('dieteticas')->insert(array(
                            'masApetito'     => $faker->randomElement(['mañana','mediodía','tarde','noche','entreHoras']),
                            'tardasComer'    => $faker->randomElement(['poco(<15minutos)','normal(20-30minutos)','mucho(>30minutos)']),
                            'alimentosPreferidos' => $faker->text,
                            'alimentosNoConsumidos' => $faker->text,
                            'alimentosConsumNoAgradan' => $faker->text,
                            'alimentosIndigestos' => $faker->text,
                            'consumoFrutas'=>$faker->randomElement(['0','1']),
                            'consumoVerduras'=>$faker->randomElement(['0','1']),
                            'tecnicas'=> $faker->randomElement(['Sencillas:hervido_vapor_plancha_horno','complejas:frituas_gratinados_empanados']),     
                            'quienCocina'=> $faker->randomElement(['tu','unoOmasDeUnFamiliar','unaPersonaContratada']),
                            'tipoCoccion'=> $faker->randomElement(['plancha','fritos','guisos_estofados','vapor','horno','microndas','hervido','papillote']),
                            'gustaCocinar'=>$faker->randomElement(['noLeGusta_Obligado','leGustaCocinarNormal','leGustaMucho']), 
                            'gustaComprar'=> 'la abuela',
                            'frecuenciaCompra'=> $faker->randomElement(['unaVezSemana','dosVecesSemana','tresVecesMasSemana','diario','unaVezMes']),
                            'ingesta'=>$faker->randomElement(['<3ComidasDia','3ComidasDia','3-5ComidasDia','>5ComidasDia']),
                            'alergiaAlimentaria'=> $faker->sentence,
                            'sustanEstimulante'=>$faker->randomElement(['café','redBull','té','chocolate','monster','burn']),  
                            'horasSueño'=>  $faker->randomElement(['<5_horas','5-8_horas','>8_horas']),
                            'calidadSueño'=>  $faker->randomElement(['buena','regular','mala','noSabe']), 
                            'hidratacion'=>  $faker->randomElement(['<3_vasosDia','3-5_vasosDia','>5_vasosDia']),
                            'deposiciones'=> $faker->randomElement(['unaVezDia','>unaVezDia','3-5_VecesSemana','<3_VecesSemana']),
                            'consistenciaDep'=> $faker->randomElement(['normal','estreImportante','estreLigero','diarreaImportante','diarreaLigera']),
                            'dietas_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])
            
                        )); 
                    
                    }    */        
    }
}
