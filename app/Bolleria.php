<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolleria extends Model
{
    protected  $table='bolleriapasteleria';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','galletasMaria','galletasIntegrales','galletasChocolate','reposteria','croissant','donuts','magdalenas','pasteles','churros','chocolates','cacaoPolvo','turron','matecados'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
