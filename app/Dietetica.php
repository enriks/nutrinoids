<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietetica extends Model
{
    protected  $table='dieteticas';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id', 'masApetito','tardasComer','alimentosPreferidos','alimentosNoConsumidos','alimentosConsumNoAgradan','alimentosIndigestos','consumoFrutas','consumoVerduras','tecnicas','quienCocina','tipoCoccion','gustaCocinar','gustaComprar','frecuenciaCompra', 'ingesta','alergiaAlimentaria','sustanEstimulante','horasSueno','calidadSueno','hidratacion','deposiciones','consistenciaDep'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
