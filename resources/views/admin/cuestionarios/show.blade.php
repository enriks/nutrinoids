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
                   
                   <p><strong>Nombre</strong> {{ $cuestionario->nombreCuestionario }} </p>
                   <p><strong>Archivo</strong> {{ $cuestionario->archivo }} </p>
                   <p><strong>Creado</strong> {{ $cuestionario->created_at}} </p>
                   <p><strong>Modificado</strong>{{ $cuestionario->updated_at}} </p>
                  
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection