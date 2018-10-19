<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verdura extends Model
{
    protected  $table='verduras';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','acelgas','col','lechuga','tomateCrudo','zanahoria','judiasVerdes','berenjenas','pimientas','esparragos','gazpacho','otrasVerduras','cebolla','ajo','perejil','patatasFritasComerciales','patatasFritasCaseras','patatasFritasAsadas','setas'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
