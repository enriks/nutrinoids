<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PoblacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('poblaciones')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('poblaciones')->insert(array(
                'poblaciones'     => 'Santander',
                'comunidades_id'  => 2           
            ));

        }
    }
}
