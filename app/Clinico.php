<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinico extends Model
{
    protected  $table='clinico';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','antFam','antPerPat','antPerQuir','problemAct','medic','alcohol','fumas','drogas','alergia','problSal'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
} 