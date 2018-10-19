<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected  $table='bebidas';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','bebidasCabonatadasAzucar','bebidasCarbonatadasBajasCalorias','zumoNaranja','zumoOtrasFrutas','cafeDesc','cafe','te','mosto','vinoRosado','vinoMoscatel','vinoTintoJoven','vinoTintoAñejo','vinoBlanco','cerveza','licores','destilados'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
