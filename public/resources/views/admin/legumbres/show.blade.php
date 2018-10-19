@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Respuestas de cuestionario x
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong> {{ $Legumbre->id}}</p>
                    <p><strong>lentejas</strong> {{ $Legumbre->lentejas}}</p>
                    <p><strong>alubias</strong> {{ $Legumbre->alubias}}</p>
                    <p><strong>garbanzos</strong> {{ $Legumbre->garbanzos}}</p>
                    <p><strong>guisantes</strong> {{ $Legumbre->guisantes}}</p>
                    <p><strong>panBlanco</strong> {{ $Legumbre->panBlanco}}</p>
                    <p><strong>panNegro</strong> {{ $Legumbre->panNegro}}</p>
                    <p><strong>cerealesDesayuno</strong> {{ $Legumbre->cerealesDesayuno}}</p>
                    <p><strong>cerealesIntegrales</strong> {{ $Legumbre->cerealesIntegrales}}</p>
                    <p><strong>arrozBlanco</strong> {{ $Legumbre->arrozBlanco}}</p>
                    <p><strong>pasta</strong> {{ $Legumbre->pasta}}</p>
                    <p><strong>pizza</strong> {{ $Legumbre->pizza}}</p>
                  <a id="cancelar" href="{{ route('legumbres.index',$Legumbre->id) }}" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection