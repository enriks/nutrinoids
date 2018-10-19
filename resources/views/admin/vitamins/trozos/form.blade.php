<div class="container">
       
        <div class="form-group">
        </div>
   
</div>
   <div class="container justify-content-center" id="tomovitaminas">
    <table class="table table-bordered justify-content-center">
        <thead>
            <tr>
                <th scope="row" colspan="1"></th>
                <th scope="row" colspan="4">¿Cuántas pastillas?</th>
                <th scope="row" colspan="5">¿Durante cuántos años?</th>

            </tr>
            <tr>
                <th></th>
                <th>Ninguna</th>
                <th>1-3 por semana</th>
                <th>4-6 por semana</th>
                <th>Cada día</th>
                <th>Menos de un año</th>
                <th>1-2 años</th>
                <th>3-4 años</th>
                <th>5-9 años</th>
                <th>10 o mas años</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastComVit', 'Complejos vitamínicos')}}</th>
                    <th>
                        {{ Form::radio('cantPastComVit', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVit', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVit', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVit', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVit', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVit', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVit', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVit', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVit', '10 o mas años')}}
                    </th>
                </div>
            </tr>
            <tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastVitC', 'Vitamina C')}}</th>
                    <th>
                        {{ Form::radio('cantPastVitC', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitC', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitC', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitC', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitC', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitC', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitC', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitC', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitC', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastVitA', 'Vitamina A')}}</th>
                    <th>
                        {{ Form::radio('cantPastVitA', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitA', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitA', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastVitA', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitA', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitA', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitA', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitA', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempVitA', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastComVitB', 'Complejo vitamínico B')}}</th>
                    <th>
                        {{ Form::radio('cantPastComVitB', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVitB', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVitB', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastComVitB', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVitB', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVitB', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVitB', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVitB', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempComVitB', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastHierro', 'Hierro')}}</th>
                    <th>
                        {{ Form::radio('cantPastHierro', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastHierro', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastHierro', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastHierro', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempHierrro', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempHierrro', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempHierrro', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempHierrro', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempHierrro', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastCalcio', 'Calcio sólo')}}</th>
                    <th>
                        {{ Form::radio('cantPastCalcio', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalcio', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalcio', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalcio', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalcio', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalcio', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalcio', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalcio', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalcio', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastCalVitD', 'Calcio + vitamina D')}}</th>
                    <th>
                        {{ Form::radio('cantPastCalVitD', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalVitD', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalVitD', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastCalVitD', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalVitD', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalVitD', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalVitD', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalVitD', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempCalVitD', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastAcdFol', 'Ácido fólico')}}</th>
                    <th>
                        {{ Form::radio('cantPastAcdFol', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdFol', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdFol', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdFol', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdFol', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdFol', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdFol', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdFol', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdFol', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('vitamin', 'Derivados de la soja')}}</th>
                    <th>
                        {{ Form::radio('cantPastDerSoj', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastDerSoj', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastDerSoj', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastDerSoj', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempDerSoj', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempDerSoj', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempDerSoj', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempDerSoj', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempDerSoj', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('cantPastAcdGrs', 'Ácidos grasos Omega-3')}}</th>
                    <th>
                        {{ Form::radio('cantPastAcdGrs', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdGrs', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdGrs', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastAcdGrs', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdGrs', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdGrs', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdGrs', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdGrs', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempAcdGrs', '10 o mas años')}}
                    </th>
                </div>
            </tr><tr>
                <div class="form-group">

                    <th>{{Form::label('vitamin', 'Otros (*Tipo: Pharmatón, Multicentrum, Micebrina, Dayamineral, Rochevit, Redoxon complex.)')}}
                    {{Form::text('vitamin', null, ['class'=> 'form-control','placeholder'=>'Especifique' ,'step'=>'any', 'id'=>'vitamin'])}}</th>
                    <th>
                        {{ Form::radio('cantPastOtros', 'Ninguna')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastOtros', '1-3 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastOtros', '4-6 por semana')}}
                    </th>
                    <th>
                        {{ Form::radio('cantPastOtros', 'Cada día')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempOtros', 'Menos de un año')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempOtros', '1-2 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempOtros', '3-4 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempOtros', '5-9 años')}}
                    </th>
                    <th>
                        {{ Form::radio('cantTiempOtros', '10 o mas años')}}
                    </th>
                </div>
            </tr>
        </tbody>
    </table>
    
    <div class="form-group">
        {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
    </div>

</div>
