@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Datos
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong>{{ $dantropometrico->id}}</p>
                    <p><strong>Sujeto</strong>{{ $dantropometrico->user_id}}</p>
                    <p><strong>Peso</strong>{{ $dantropometrico->peso}}</p>
                    <p><strong>Talla</strong>{{ $dantropometrico->talla}}</p>
                    <p><strong>IMC</strong>{{ $dantropometrico->imc}}</p>
                    <p><strong>metBasal</strong>{{ $dantropometrico->metBasal}}</p>
                    <p><strong>masaGrasa</strong>{{ $dantropometrico->masaGrasa}}</p>
                    <p><strong>masaLibre</strong>{{ $dantropometrico->masaLibre}}</p>
                    <p><strong>masaMusculo</strong>{{ $dantropometrico->masaMusculo}}</p>
                    <p><strong>masaOsea</strong>{{ $dantropometrico->masaOsea}}</p>
                    <p><strong>agua</strong>{{ $dantropometrico->agua}}</p>
                   
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection