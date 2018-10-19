<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected  $table='registro7';

    public  $timestamps=false;

    
  
    protected $fillable = ['id', 'user_id', 'fecha', 'desAlimento', 'desBebida', 'desHora', 'desLugar', 'memaAlimento', 'memaBebida', 'memaHora', 'memaLugar', 'comAlimento', 'comBebida', 'comHora', 'comLugar', 'meriAlimento', 'meriBebida', 'meriHora', 'meriLugar', 'cenAlimento', 'cenBebida', 'cenHora', 'cenLugar', 'picAlimento', 'picBebida', 'picHora', 'picLugar'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
