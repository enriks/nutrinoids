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
                   
                   <p><strong>ID</strong>{{ $hucape->id}}</p>
                    <p><strong>huevosGallina</strong>{{ $hucape->huevosGallina}}</p>
                    <p><strong>aveConPiel</strong>{{ $hucape->aveConPiel}}</p>
                    <p><strong>aveSinPiel</strong>{{ $hucape->aveSinPiel}}</p>
                    <p><strong>carneTernera</strong>{{ $hucape->carneTernera}}</p>
                    <p><strong>carneCerdo</strong>{{ $hucape->carneCerdo}}</p>
                    <p><strong>carneCordero</strong>{{ $hucape->carneCordero}}</p>
                    <p><strong>conejo</strong>{{ $hucape->conejo}}</p>
                    <p><strong>higado</strong>{{ $hucape->higado}}</p>
                    <p><strong>otrasViceras</strong>{{ $hucape->otrasViceras}}</p>
                    <p><strong>jamonSerrano</strong>{{ $hucape->jamonSerrano}}</p>
                    <p><strong>jamonLoncha</strong>{{ $hucape->jamonLoncha}}</p>
                    <p><strong>carnesProcesadas</strong>{{ $hucape->carnesProcesadas}}</p>
                    <p><strong>pates</strong>{{ $hucape->pates}}</p>
                    <p><strong>hamburguesa</strong>{{ $hucape->hamburguesa}}</p>
                    <p><strong>tocino</strong>{{ $hucape->tocino}}</p>
                    <p><strong>pescadoBlanco</strong>{{ $hucape->pescadoBlanco}}</p>
                    <p><strong>pescadoAzul</strong>{{ $hucape->pescadoAzul}}</p>
                    <p><strong>pescadoSalado</strong>{{ $hucape->pescadoSalado}}</p>
                    <p><strong>moluscos</strong>{{ $hucape->moluscos}}</p>
                    <p><strong>moluscosCefalopodos</strong>{{ $hucape->moluscosCefalopodos}}</p>
                    <p><strong>crustaceos</strong>{{ $hucape->crustaceos}}</p>
                    <p><strong>mariscosEnlatados</strong>{{ $hucape->mariscosEnlatados}}</p>
                    <p><strong>mariscosAceite</strong>{{ $hucape->mariscosAceite}}</p>

                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection