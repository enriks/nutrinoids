<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DietasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('dietas')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('dietas')->insert(array(
                'frecuencia' => $faker->randomElement(['nunca','diaria','semanal','ocacional']),
                'adherencia' => $faker->randomElement(['si','no']), 
                        
            ));

        }
    }
}
