@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver Cuestionario
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>ID</strong>{{ $dietetica->id}}</p>
                    <p><strong>masApetito</strong>{{ $dietetica->masApetito}}</p>
                    <p><strong>tardasComer</strong>{{ $dietetica->tardasComer}}</p>
                    <p><strong>alimentosPreferidos</strong>{{ $dietetica->alimentosPreferidos}}</p>
                    <p><strong>alimentosNoConsumidos</strong>{{ $dietetica->alimentosNoConsumidos}}</p>
                    <p><strong>alimentosConsumNoAgradan</strong>{{ $dietetica->alimentosConsumNoAgradan}}</p>
                    <p><strong>alimentosIndigestos</strong>{{ $dietetica->alimentosIndigestos}}</p>
                    <p><strong>consumoFrutas</strong>{{ $dietetica->consumoFrutas}}</p>
                    <p><strong>consumoVerduras</strong>{{ $dietetica->consumoVerduras}}</p>
                    <p><strong>tecnicas</strong>{{ $dietetica->tecnicas}}</p>
                    <p><strong>quienCocina</strong>{{ $dietetica->quienCocina}}</p>
                    <p><strong>tipoCoccion</strong>{{ $dietetica->tipoCoccion}}</p>
                    <p><strong>gustaCocinar</strong>{{ $dietetica->gustaCocinar}}</p>
                    <p><strong>gustaComprar</strong>{{ $dietetica->gustaComprar}}</p>
                    <p><strong>frecuenciaCompra</strong>{{ $dietetica->frecuenciaCompra}}</p>
                    <p><strong>ingesta</strong>{{ $dietetica->ingesta}}</p>
                    <p><strong>alergiaAlimentaria</strong>{{ $dietetica->alergiaAlimentaria}}</p>
                    <p><strong>sustanEstimulante</strong>{{ $dietetica->sustanEstimulante}}</p>
                    <p><strong>horasSueno</strong>{{ $dietetica->horasSueno}}</p>
                    <p><strong>calidadSueno</strong>{{ $dietetica->calidadSueno}}</p>
                    <p><strong>hidratacion</strong>{{ $dietetica->hidratacion}}</p>
                    <p><strong>deposiciones</strong>{{ $dietetica->deposiciones}}</p>
                    <p><strong>consistenciaDep</strong>{{ $dietetica->consistenciaDep}}</p>
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection