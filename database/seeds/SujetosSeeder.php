<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SujetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('sujetos')->delete();
        for ($i=0; $i < 50; $i ++){

            \DB::table('sujetos')->insert(array(
                'nombre'     => $faker->name,
                'apellidos'    => $faker->lastname, 
                'email'     => $faker->email,
                'hijos'    => $faker->randomElement(['1','2','3','4']), 
                'fechaNac'     => $faker->date,
                'codigo'    => $faker->randomElement(['1','2','3','4']), 
                'comunidades_id'     => 2,
                'laborales_id'    => $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']),   
                'poblaciones_id'     => 1,
                'nacionalidades_id'    =>1, 
                'estudios_id'     =>  $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']),
                'dieteticas_id'    =>  $faker->randomElement(['1','2','3','4']), 
                'dietas_id'     =>  $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']),
                'dantropometricos_id'    =>  $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']), 
                'deportes_id'     =>  $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']),
                'sexos_id'    =>  $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25']), 
                
            ));

        }
    }
}
