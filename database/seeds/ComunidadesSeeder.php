<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ComunidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        \DB::table('comunidades')->delete();
        for ($i=0; $i < 2; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Cantabria',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Andalucía',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Canarias',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Cataluña',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Galicia',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Islas Baleares',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'La Rioja',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Navarra',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'País Vazco',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Aragón',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Castilla-La Mancha',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Comunidad Valenciana',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Extremadura',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Comunidad de Madrid',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Región de Murcia',
                'nacionalidades_id'  => 1,            
            ));

        }
        for ($i=0; $i < 1; $i ++){

            \DB::table('comunidades')->insert(array(
                'comunidadAutonoma'  => 'Asturias',
                'nacionalidades_id'  => 1,            
            ));

        }
    }
}

