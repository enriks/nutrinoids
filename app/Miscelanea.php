<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miscelanea extends Model
{
    protected  $table='miscelanea';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','croquetas','sopas','mostaza','mayonesa','salsaTomate','picante','sal','mermeladas','azucar','miel','snacks','otro'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
