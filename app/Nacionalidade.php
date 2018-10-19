<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    protected  $table='nacionalidades';
  
  protected $fillable = ['id','nacionalidad', ];

  public function sujetos(){
    return $this->hasMany(Sujeto::class);
    
}
}
