<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected  $table='dietas';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id', 'frecuencia','adherencia'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
}
