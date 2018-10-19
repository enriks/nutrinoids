@extends('layouts.app')
@section('content')


<div class="row justify-content-md-center">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="row align-items-end">
                <div class="col col-offset-4">
                    <div class="card">
                        <div class="card-header">
                            Cuestionario de estilo de vida: historial clinico 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Seleccione sujeto:</h5>
                            <select id="select" name="clinicos" class="selectpicker col-md-8" data-show-subtext="true" data-live-search="true">
                                @foreach($Clinicos as $clinico)
                                <option data-subtext="{{$clinico->codigo}}" value="{{$clinico->id}}">{{$clinico->name}} {{$clinico->lastname}}</option>
                                @endforeach
                            </select>
                            <a id="editar" href="" class="btn btn-warning">Editar</a>
                            <a id="cancelar" href="{{ route('indices.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
