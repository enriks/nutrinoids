@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Ver sujeto
                   
                </div>
                <div class= "panel-body">
                   
                   <p><strong>Nombre</strong> {{ $sujeto->nombre}} </p>
                   <p><strong>Archivo</strong> {{ $sujeto->apellidos }} </p>
                   <p><strong>Email</strong> {{ $sujeto->email }} </p>
                   <p><strong>Fecha Nacimiento</strong> {{ $sujeto->fechaNac }} </p>
                   <p><strong>Código</strong> {{ $sujeto->codigo }} </p>
                   <p><strong>Imagen</strong> {{ $sujeto->imagenurl }} </p>
                   <p><strong>Fecha Nacimiento</strong> {{ $sujeto->trabaja}} </p>
                   <p><strong>Código</strong> {{ $sujeto->sexo}} </p>
                   <p><strong>Imagen</strong> {{ $sujeto->deportes}} </p>
                   <p><strong>Nacionalidad</strong> {{ $sujeto->nacionalidade_id}} </p>
                   <p><strong>Comunidad</strong> {{ $sujeto->comunidade_id}} </p>
                   <p><strong>Población</strong> {{ $sujeto->poblacione_id}} </p>
                   <p><strong>Modificado</strong>{{ $sujeto->created_at}} </p>
                   <p><strong>Modificado</strong>{{ $sujeto->updated_at}} </p>
                   <a id="cancelar" href="{{ route('sujetos.index',$sujeto->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>  
    </div>
   
</div>
 
@endsection