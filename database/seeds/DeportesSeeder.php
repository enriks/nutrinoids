<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DeportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \DB::table('deportes')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('deportes')->insert(array(
                'edad'     => $faker->randomElement(['23','34','55','43','56']),
                'practica'    => $faker->randomElement(['si','no']), 
                        
            ));

        }
	   
    }
}
