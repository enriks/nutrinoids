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
                   
                   <p><strong>ID</strong>{{ $estudio->id}}</p>
                    <p><strong>masApetito</strong>{{ $estudio->user_id}}</p>
                    <p><strong>tardasComer</strong>{{ $estudio->nivelEstudio}}</p>
                    <p><strong>alimentosPreferidos</strong>{{ $estudio->estudioActual}}</p>
                    <p><strong>alimentosNoConsumidos</strong>{{ $estudio->nivelEstudioPadre}}</p>
                    <p><strong>alimentosConsumNoAgradan</strong>{{ $estudio->nivelEstudioMadre}}</p>
                    <p><strong>alimentosIndigestos</strong>{{ $estudio->NS_NC}}</p>
                    
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection