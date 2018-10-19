<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class dantropometricosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \DB::table('dantropometricos')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('dantropometricos')->insert(array(
                'peso'     => $faker->randomElement(['0.23','0.34','0.55','0.43','0.56']),
                'talla'    => $faker->randomElement(['0.57','0.61','0.45','0.69','0.90']), 
                'imc'     => $faker->randomElement(['0.2','0.3','0.5','0.3','0.6']),
                'metBasal'    => $faker->randomElement(['0.30','0.40','0.50','0.9','0.60']),  
                'masaGrasa'     => $faker->randomElement(['0.2','0.5','0.7','0.9','0.9']),
                'masaLibre'    => $faker->randomElement(['0.1','0.2','0.3','0.4','0.5']), 
                'masaMusculo'     => $faker->randomElement(['0.6','0.7','0.8','0.9','0.10']),
                'masaOsea'    => $faker->randomElement(['0.9','0.7','0.5','0.3','0.2']),
                'agua'     => $faker->randomElement(['0.7','0.7','0.6','0.4','0.3']),  
            ));

        }
    }
}
