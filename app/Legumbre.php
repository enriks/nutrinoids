<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legumbre extends Model
{
    protected  $table='legumbrescereales';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','lentejas','alubias','garbanzos','guisantes','panBlanco','panNegro','cerealesDesayuno','cerealesIntegrales','arrozBlanco','pasta','pizza'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
