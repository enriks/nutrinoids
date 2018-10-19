<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SexosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('sexos')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('sexos')->insert(array(
                
                'sexo'=> $faker->randomElement(['0','1']), 
                        
            ));

        }
    }
}
