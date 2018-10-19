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
                   

                   <p><strong>ID</strong>{{ $registro->id}}</p>
                    <p><strong>fecha</strong>{{ $registro->fecha}}</p>
                    <p><strong>desAlimento</strong>{{ $registro->desAlimento}}</p>
                    <p><strong>desBebida</strong>{{ $registro->desBebida}}</p>
                    <p><strong>desHora</strong>{{ $registro->desHora}}</p>
                    <p><strong>desLugar</strong>{{ $registro->desLugar}}</p>
                    <p><strong>memaAlimento</strong>{{ $registro->memaAlimento}}</p>
                    <p><strong>memaBebida</strong>{{ $registro->memaBebida}}</p>
                    <p><strong>memaHora</strong>{{ $registro->memaHora}}</p>
                    <p><strong>memaLugar</strong>{{ $registro->memaLugar}}</p>
                    <p><strong>comAlimento</strong>{{ $registro->comAlimento}}</p>
                    <p><strong>comBebida</strong>{{ $registro->comBebida}}</p>
                    <p><strong>comHora</strong>{{ $registro->comHora}}</p>
                    <p><strong>comLugar</strong>{{ $registro->comLugar}}</p>
                    <p><strong>meriAlimento</strong>{{ $registro->meriAlimento}}</p>
                    <p><strong>meriBebida</strong>{{ $registro->meriBebida}}</p>
                    <p><strong>meriHora</strong>{{ $registro->meriHora}}</p>
                    <p><strong>meriLugar</strong>{{ $registro->meriLugar}}</p>
                    <p><strong>cenAlimento</strong>{{ $registro->cenAlimento}}</p>
                    <p><strong>cenBebida</strong>{{ $registro->cenBebida}}</p>
                    <p><strong>cenHora</strong>{{ $registro->cenHora}}</p>
                    <p><strong>cenLugar</strong>{{ $registro->cenLugar}}</p>
                    <p><strong>picAlimento</strong>{{ $registro->picAlimento}}</p>
                    <p><strong>picBebida</strong>{{ $registro->picBebida}}</p>
                    <p><strong>picHora</strong>{{ $registro->picHora}}</p>
                    <p><strong>picLugar</strong>{{ $registro->picLugar}}</p>
                    <a id="cancelar" href="{{ route('registros.index',$registro->id) }}" class="btn btn-danger">Cancelar</a>
                  
                </div>
            </div>
        </div>  
    </div>
</div>
 
@endsection