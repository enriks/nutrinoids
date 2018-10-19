@extends('layouts.app')
@section('content')
   <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de dantropometricos
                    <a href="{{ route('dantropometricos.create') }}" class="btn btn-sm btn-primary pull-right">  {{ __('Crear') }}  </a>
                </div>
            
            <div class= "panel-body">
             
                    <table class="table table-striped table-hover" >
                    <thead>
                    <tr>
                    <th width = "10px">ID</th>
                    <th>user_id</th>
                    <th>peso</th>
                    <th>talla</th>
                    <th>imc</th>
                    <th>M.Basal</th>
                    <th>Masa Grasa</th>
                    <th>Masa Libre</th>
                    <th>Masa Musculo</th>
                    <th>Masa Osea</th>
                    <th>Agua</th>
                    <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dantropometricos as $dantropometrico)
                    <tr>
                    <td>{{ $dantropometrico->id}}</td>
                    <td>{{ $dantropometrico->user_id}}</td>
                    <td>{{ $dantropometrico->peso}}</td>
                    <td>{{ $dantropometrico->talla}}</td>
                    <td>{{ $dantropometrico->imc}}</td>
                    <td>{{ $dantropometrico->metBasal}}</td>
                    <td>{{ $dantropometrico->masaGrasa}}</td>
                    <td>{{ $dantropometrico->masaLibre}}</td>
                    <td>{{ $dantropometrico->masaMusculo}}</td>
                    <td>{{ $dantropometrico->masaOsea}}</td>
                    <td>{{ $dantropometrico->agua}}</td>
                    
                    <td width="10px">
                    <a href="{{ route('dantropometricos.show',$dantropometrico->id) }}" class="btn btn-sm btn-default">ver</a>
                    </td>
                    <td width="10px">
                    <a href="{{ route('dantropometricos.edit',$dantropometrico->id) }}" class="btn btn-sm btn-default">editar</a>
                    </td>
                    <td width="10px">
                    {!! Form::open(['route'=> ['dantropometricos.destroy',$dantropometrico->id],
                     'method' => 'DELETE']) !!}
                     <button class="btn btn-sm btn-danger">eliminar</button>
                     {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{ $dantropometricos->render() }}
                </div>
            </div>   
        </div>
    </div>
 
@endsection
 
