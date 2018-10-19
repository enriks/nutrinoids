<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aceite extends Model
{
    protected  $table='aceitesgrasas';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','aceiteOliva','aceiteOlivaVirgen','aceiteMaiz','aceiteGirasol','aceiteSoja','mezclaAnteriores','margarina','mantequilla','mantecaCerdo'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
