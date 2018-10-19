<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      Eloquent::unguard();

     // $this->call(UserTableSeeder::class);
     // $this->call(PermissionTableSeeder::class);
     // $this->call('DeportesSeeder');
     // $this->call('NacionalidadesSeeder');
      //$this->call('ComunidadesSeeder');
      //$this->call('DietasSeeder');
     // $this->call('DiteticasSeeder');
     //$this->call('EstudiosSeeder');
     //$this->call('LaboralesSeeder');
     //$this->call('PoblacionesSeeder');
     //$this->call('SexosSeeder');
     //$this->call('dantropometricosSeeder');
     $this->call('SujetosSeeder');
  }

}