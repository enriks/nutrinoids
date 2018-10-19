<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujeto extends Model
{
  protected  $table='sujetos';
  
  protected $fillable = ['id','user_id','nombre', 'apellidos','email','fechaNac','codigo','imagenurl','comunidade_id','trabaja','poblacione_id','nacionalidade_id','sexo','deportes','created_at','updated_at',];
  
  public function user(){
    return $this->belongsTo(User::class);
}
public function estudios(){
    return $this->belongsTo(Estudio::class);
}  


public function dieteticas(){
    return $this->belongsTo(Dietetica::class);
    
}
  
public function dantropometricos(){
    return $this->belongsTo(Dantropometrico::class);
        
}

public function dietas(){
    return $this->belongToMany(Dieta::class);
}


public function nacionalidade(){
    return $this->hasOne(Nacionalidade::class);
    
}

public function comunidade(){
    return $this->belongsTo(Comunidade::class);
}
  
public function poblacione(){
    return $this->belongsTo(Poblacione::class);
        
}

public function cuestionario(){
    return $this->belongsToMany(Cuestionario::class);
}

public function lacteo(){
    return $this->belongsTo(lacteo::class);
    
}

public function hucape(){
    return $this->belongsTo(Hucape::class);
    
}

public function verdura(){
    return $this->belongsTo(verdura::class);
    
}
     
public function fruta(){
    return $this->belongsTo(Fruta::class);
    
}
   public function legumbre(){
    return $this->belongsTo(Legumbre::class);
    
}
   public function aceite(){
    return $this->belongsTo(Aceite::class);
    
}
   public function bolleria(){
    return $this->belongsTo(Bolleria::class);
    
}
   public function miscelanea(){
    return $this->belongsTo(Miscelanea::class);
    
}
   public function bebida(){
    return $this->belongsTo(Bebida::class);
    
}
   public function comedor(){
    return $this->belongsTo(Comedor::class);
    
}
  public function registro(){
    return $this->belongsTo(Comedor::class);
    
}
    
}

