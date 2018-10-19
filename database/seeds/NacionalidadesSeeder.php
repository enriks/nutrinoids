<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class NacionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \DB::table('nacionalidades')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('nacionalidades')->insert(array(
                'nacionalidad'=> $faker->country,
                        
            ));

        }
    }
}
