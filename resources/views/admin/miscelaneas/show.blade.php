@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-me-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    Ver Cuestionario

                </div>
                <div class="panel-body">

                    <p><strong>ID</strong>{{ $Miscelanea->id}}</p>
                    <p><strong>croquetas</strong>{{ $Miscelanea->croquetas}}</p>
                    <p><strong>sopas</strong>{{ $Miscelanea->sopas}}</p>
                    <p><strong>mostaza</strong>{{ $Miscelanea->mostaza}}</p>
                    <p><strong>mayonesa</strong>{{ $Miscelanea->mayonesa}}</p>
                    <p><strong>salsaTomate</strong>{{ $Miscelanea->salsaTomate}}</p>
                    <p><strong>picante</strong>{{ $Miscelanea->picante}}</p>
                    <p><strong>sal</strong>{{ $Miscelanea->sal}}</p>
                    <p><strong>mermeladas</strong>{{ $Miscelanea->mermeladas}}</p>
                    <p><strong>azucar</strong>{{ $Miscelanea->azucar}}</p>
                    <p><strong>miel</strong>{{ $Miscelanea->miel}}</p>
                    <p><strong>snacks</strong>{{ $Miscelanea->snacks}}</p>
                    <p><strong>otro</strong>{{ $Miscelanea->otro}}</p>
                    <a id="cancelar" href="{{ route('miscelaneas.index',$Miscelanea->id) }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
