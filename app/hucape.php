<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hucape extends Model
{
    protected  $table='hucape';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','huevosGallina','aveConPiel','aveSinPiel','carneTernera','carneCerdo','carneCordero','conejo','higado','otrasViceras','jamonSerrano','jamonLoncha','carnesProcesadas','pates','hamburguesa','tocino','pescadoBlanco','pescadoAzul','pescadoSalado','moluscos','moluscosCefalopodos','crustaceos','mariscosEnlatados','mariscosAceite'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
