@extends('layouts.app')
@section('content')

                <div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Cuestionarios
                    <a href="{{ route('cuestionarios.create') }}" class="btn btn-sm btn-primary pull-right">  {{ __('Crear') }}  </a>
                </div>
            
            <div class= "panel-body">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Nombre Cuestionario</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cuestionarios as $cuestionario)
                    <tr>
                    <td>{{ $cuestionario->id}}</td>
                    <td>{{ $cuestionario->nombreCuestionario}}</td>
                    <td>{{ $cuestionario->created_at}}</td>
                    <td>{{ $cuestionario->updated_at}}</td>
                    <td width="10px">
                    <a href="{{ route('cuestionarios.show',$cuestionario->id) }}" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="{{ route('cuestionarios.edit',$cuestionario->id) }}" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    {!! Form::open(['route'=> ['cuestionarios.destroy',$cuestionario->id],
                     'method' => 'DELETE']) !!}
                     <button class="btn btn-sm btn-danger">eliminar</button>
                     {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                    </table>
                    {{ $cuestionarios->render() }}
                </div>
            </div>   
        </div>
    </div>
</div>
 
@endsection
 
