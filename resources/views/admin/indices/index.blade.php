@extends('layouts.app')
@section('content')


<div class="row justify-content-md-center">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="row align-items-end">
                <div class="col col-offset-4">
                   <div class="card text-center">
  <div class="card-header">
                            Edición  y revisión de Cuestionarios
                        </div>
  <div class="card-body">
                            <h5 class="card-title">Seleccione el test a ir:</h5>
                            <select id="select" name="indice" class="selectpicker col-md-8" data-show-subtext="true" data-live-search="true">
                                <option data-subtext="lacteos" value="lacteos">creacion de cuestionario de frecuencia de consumno: lacteos</option>
                                <option data-subtext="hucapes" value="hucapes">creacion de cuestionario de frecuencia de consumno: Huevos, carnes, pescados</option>
                                <option data-subtext="verduras" value="verduras">creacion de cuestionario de frecuencia de consumno: verduras y hortalizas</option>
                                <option data-subtext="frutas" value="frutas">creacion de cuestionario de frecuencia de consumno: frutas</option>
                                <option data-subtext="legumbres" value="legumbres">creacion de cuestionario de frecuencia de consumno: legumbres y cereales</option>
                                <option data-subtext="aceites" value="aceites">creacion de cuestionario de frecuencia de consumno: aceites y grasas</option>
                                <option data-subtext="bollerias" value="bollerias">creacion de cuestionario de frecuencia de consumno: bolleria y pasteleria</option>
                                <option data-subtext="miscelaneas" value="miscelaneas">creacion de cuestionario de frecuencia de consumno: miscelanea</option>
                                <option data-subtext="bebidas" value="bebidas">creacion de cuestionario de frecuencia de consumno: bebidas</option>
                                <option data-subtext="adherencias" value="adherencias">Adherencia a la dieta mediterranea</option>
                                <option data-subtext="comedors" value="comedors">Comedor emocional gaunlet</option>
                                <option data-subtext="dantropometricos" value="dantropometricos">Cuestionario estilo de vida: Datos antopometricos</option>
                                <option data-subtext="dieteticas" value="dieteticas">Cuestionario estilo de vida: historia dietica</option>
                                <option data-subtext="clinicos" value="clinicos">Cuestionario estilo de vida: historial clinico</option>
                                <option data-subtext="vitamins" value="vitamins">Cuestionario estilo de vida: suplementos de vitaminas y minerales</option>
                                <option data-subtext="dietas" value="dietas">Cuestionario estilo de vida: dietas</option>
                                <option data-subtext="estudios" value="estudios">Cuestionario estilo de vida: Profesion</option>
                                <option data-subtext="sujetos" value="sujetos">Listado de sujetos</option>
                                <option data-subtext="registros" value="registros">Registro 3 dias</option>
                                <option data-subtext="cuestionarios" value="cuestionarios">Listado de cuestionarios</option>
                            </select>
                            <a id="visitar" href="" class="btn btn-primary">Ir al test</a>
                        </div>
  <div class="card-footer text-muted">
  </div>
</div>
                    <div class="card">
                        
                        
                    </div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
