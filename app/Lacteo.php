<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lacteo extends Model
{
    protected  $table='lacteos';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','lecheEnt','lecheSemi','lecheDesc','lecheCond','nata','batidoLeche','yogurtEnt','yogurtDesc','petit','requeson','quesoPorciones','otrosQuesos','quesoBlanco','natillas','helados'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
