@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Lacteo
                </div>
                <div class="panel-body">
                    {!! Form::model($Lacteo,['route'=>['lacteos.update',$Lacteo->id],
                    'method' =>'PUT']) !!}
                    {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                    @include('admin.lacteos.trozos.form')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-offset-2">

            <a id="cancelar" href="{{ route('lacteos.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </div>

</div>

@endsection
