@extends('layouts.app')
@section('content')
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
            <div class= "panel-body table-responsive">
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>Sujeto</th>
                    <th>fecha</th>
                    <th>desAlimento</th>
                    <th>desBebida</th>
                    <th>desHora</th>
                    <th>desLugar</th>
                    <th>memaAlimento</th>
                    <th>memaBebida</th>
                    <th>memaHora</th>
                    <th>memaLugar</th>
                    <th>comAlimento</th>
                    <th>comBebida</th>
                    <th>comHora</th>
                    <th>comLugar</th>
                    <th>meriAlimento</th>
                    <th>meriBebida</th>
                    <th>meriHora</th>
                    <th>meriLugar</th>
                    <th>cenAlimento</th>
                    <th>cenBebida</th>
                    <th>cenHora</th>
                    <th>cenLugar</th>
                    <th>picAlimento</th>
                    <th>picBebida</th>
                    <th>picHora</th>
                    <th>picLugar</th>
                    

                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                    <tr>
                    <td>{{ $registro->id}}</td>
                    <td>{{ $registro->user_id}}</td>
                    <td>{{ $registro->fecha}}</td>
                    <td>{{ $registro->desAlimento}}</td>
                    <td>{{ $registro->desBebida}}</td>
                    <td>{{ $registro->desHora}}</td>
                    <td>{{ $registro->desLugar}}</td>
                    <td>{{ $registro->memaAlimento}}</td>
                    <td>{{ $registro->memaBebida}}</td>
                    <td>{{ $registro->memaHora}}</td>
                    <td>{{ $registro->memaLugar}}</td>
                    <td>{{ $registro->comAlimento}}</td>
                    <td>{{ $registro->comBebida}}</td>
                    <td>{{ $registro->comHora}}</td>
                    <td>{{ $registro->comLugar}}</td>
                    <td>{{ $registro->meriAlimento}}</td>
                    <td>{{ $registro->meriBebida}}</td>
                    <td>{{ $registro->meriHora}}</td>
                    <td>{{ $registro->meriLugar}}</td>
                    <td>{{ $registro->cenAlimento}}</td>
                    <td>{{ $registro->cenBebida}}</td>
                    <td>{{ $registro->cenHora}}</td>
                    <td>{{ $registro->cenLugar}}</td>
                    <td>{{ $registro->picAlimento}}</td>
                    <td>{{ $registro->picBebida}}</td>
                    <td>{{ $registro->picHora}}</td>
                    <td>{{ $registro->picLugar}}</td>
                    <td width="10px">
                    <a href="{{ route('registros.show',$registro->id) }}" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="{{ route('registros.edit',$registro->id) }}" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    {!! Form::open(['route'=> ['registros.destroy',$registro->id],
                     'method' => 'DELETE']) !!}
                     <button class="btn btn-sm btn-danger">eliminar</button>
                     {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $registros->render() }}
                </div>
            </div>   
        </div>
    </div>
 
@endsection
 
