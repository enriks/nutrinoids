<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class LaboralesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('laborales')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('laborales')->insert(array(
                'situacionlaboral'     => $faker->randomElement(['sinTrabajo','jornadaCompleta','mediaJornada','turno(mañana_tarde_noche)']),
                        
            ));

        }
    }
}
