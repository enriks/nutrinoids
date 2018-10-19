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

                    <p><strong>ID</strong>{{ $bolleria->id}}</p>
                    <p><strong>galletasMaria</strong>{{ $bolleria->galletasMaria}}</p>
                    <p><strong>galletasIntegrales</strong>{{ $bolleria->galletasIntegrales}}</p>
                    <p><strong>galletasChocolate</strong>{{ $bolleria->galletasChocolate}}</p>
                    <p><strong>reposteria</strong>{{ $bolleria->reposteria}}</p>
                    <p><strong>croissant</strong>{{ $bolleria->croissant}}</p>
                    <p><strong>donuts</strong>{{ $bolleria->donuts}}</p>
                    <p><strong>magdalenas</strong>{{ $bolleria->magdalenas}}</p>
                    <p><strong>pasteles</strong>{{ $bolleria->pasteles}}</p>
                    <p><strong>churros</strong>{{ $bolleria->churros}}</p>
                    <p><strong>chocolates</strong>{{ $bolleria->chocolates}}</p>
                    <p><strong>cacaoPolvo</strong>{{ $bolleria->cacaoPolvo}}</p>
                    <p><strong>turron</strong>{{ $bolleria->turron}}</p>
                    <p><strong>matecados</strong>{{ $bolleria->matecados}}</p>
                    <a id="cancelar" href="{{ route('bollerias.index',$bolleria->id) }}" class="btn btn-danger">Cancelar</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
