<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('estudios')->delete();
        for ($i=0; $i < 25; $i ++){

            \DB::table('estudios')->insert(array(
                'estudioActual' =>$faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']),
                'estudioActual' => $faker->randomElement(['1','0']), 
                'nivelEstudioPadre' => $faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']),
                'nivelEstudioMadre' => $faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']), 
                'NS_NC'=> $faker->randomElement(['1','2','3','4']),        
            ));

        }
        for ($i=0; $i < 25; $i ++){

            \DB::table('estudios')->insert(array(
                'estudioActual' =>$faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']),
                'estudioActual' => $faker->randomElement(['1','0']), 
                'nivelEstudioPadre' => $faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']),
                'nivelEstudioMadre' => $faker->randomElement(['sinEstudios','primarios','secundarios(Bachiller_FPI)','superiores(Universidad_FPII)']), 
                'NS_NC'=> $faker->randomElement(['1','2','3','4']),        
            ));

        }
    }
}
