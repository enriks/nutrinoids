<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected  $table='estudios';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id', 'nivelEstudio','estudioActual','nivelEstudioPadre','nivelEstudioMadre',];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
}
