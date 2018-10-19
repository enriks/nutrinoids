@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar registro
                </div>
                <div class="panel-body">
                    {!! Form::model($registro,['route'=>['registros.update',$registro->id],
                    'method' =>'PUT']) !!}
                    @include('admin.registros.trozos.form')
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('registros.index',$registro->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
