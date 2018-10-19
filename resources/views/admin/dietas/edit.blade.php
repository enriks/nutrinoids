@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar dieta
                </div>
                <div class="panel-body">
                    {!! Form::model($dieta,['route'=>['dietas.update',$dieta->id],
                    'method' =>'PUT']) !!}
                    {{ Form::hidden('user_id', null, ['class'=> 'form-control' ,'placeholder'=>'' ,'step'=>'any','id'=>'user_id']) }}
                    @include('admin.dietas.trozos.form')
                    {!! Form::close() !!}
                    <a id="cancelar" href="{{ route('dietas.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
