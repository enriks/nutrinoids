@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong>{{ $dieta->id}}</p>
                    <p><strong>Sujeto de Investigación</strong>{{ $dieta->user_id}}</p>
                    <p><strong>Frecuencia</strong>{{ $dieta->frecuencia}}</p>
                    <p><strong>Adherencia</strong>{{ $dieta->adherencia}}</p>
                    
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection