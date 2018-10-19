@extends('layouts.app')
@section('content')
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a id="cancelar" href="{{ route('indices.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Código</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Imagen</th>
                    <th>Laboral</th>
                    <th>Sexo</th>
                    <th>Deportes</th>
                    <th>Nacionalidad</th>
                    <th>Comunidad A.</th>
                    <th>Población</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sujetos as $sujeto)
                    <tr>
                    <td>{{ $sujeto->id}}</td>
                    <td>{{ $sujeto->codigo}}</td>
                    <td>{{ $sujeto->fechaNac}}</td>
                    <td>{{ $sujeto->imagenurl}}</td>
                    <td>{{ $sujeto->trabaja}}</td>
                    <td>{{ $sujeto->sexo}}</td>
                    <td>{{ $sujeto->deportes}}</td>
                    <td>{{ $sujeto->nacionalidade_id}}</td>
                    <td>{{ $sujeto->comunidade_id}}</td>
                    <td>{{ $sujeto->poblacione_id}}</td>
                    <td>{{ $sujeto->created_at}}</td>
                    <td>{{ $sujeto->updated_at}}</td>
                    <td width="10px">
                    <a href="{{ route('sujetos.show',$sujeto->id) }}" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="{{ route('sujetos.edit',$sujeto->id) }}" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    {!! Form::open(['route'=> ['sujetos.destroy',$sujeto->id],
                     'method' => 'DELETE']) !!}
                     <button class="btn btn-sm btn-danger">eliminar</button>
                     {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $sujetos->render() }}
                </div>
            </div>   
        </div>
    </div>

 
@endsection
 
