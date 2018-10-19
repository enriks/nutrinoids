<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comedor extends Model
{
    protected  $table='comemocional';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','pg1','pg2','pg3','pg4','pg5','pg6','pg7','pg8','pg9','pg10','total'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
