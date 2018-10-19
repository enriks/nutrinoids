<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $fillable = ['id','nombreCuestionario','url','archivo','created_at','updated_at', ];

    public function sujeto(){
        $this->belongsToMany(Sujeto::class);
    }
    

}
