@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar adherencia
                </div>
                <div class="panel-body">
                    {!! Form::model($adherencia,['route'=>['adherencias.update',$adherencia->id],
                    'method' =>'PUT']) !!}
                    {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                    @include('admin.adherencias.trozos.form')
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('adherencias.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
