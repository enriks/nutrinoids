<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dantropometrico extends Model
{
    protected $table='dantropometricos';
   
    public  $timestamps=false;
  
    protected $fillable = ['id','user_id', 'peso','talla','imc','metBasal','masaGrasa','masaGrasapor','masaLibre','masaLibrepor','masaMusculo','masaMusculopor','masaOsea','masaOseapor','agua'];
    
    public function user()
    {
    	return $this->belongsTo('App\User', 'id', 'dantropometricos_id');

    }
    
}
