<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    protected  $table='vitamin';

    public  $timestamps=false;
  
    protected $fillable = ['id','user_id','cantPastComVit','cantTiempComVit','cantPastVitC','cantTiempVitC','cantPastVitA','cantTiempVitA','cantPastComVitB','cantTiempComVitB','cantPastHierro','cantTiempHierrro','cantPastCalcio','cantTiempCalcio','cantPastCalVitD','cantTiempCalVitD','cantPastAcdFol','cantTiempAcdFol','cantPastDerSoj','cantTiempDerSoj','cantPastAcdGrs','cantTiempAcdGrs','vitamin','cantPastOtros','cantTiempOtros'];
    
    public function user(){
      return $this->belongsTo(User::class);
  }
 
}