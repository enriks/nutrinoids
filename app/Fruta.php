<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    protected  $table='frutas';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','naranja','platano','manzana','fresas','cerezas','melocoton','sandia','melon','kiwi','uvas','aceitunas','frutasAlmibar','datiles','almendras','nueces'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}
