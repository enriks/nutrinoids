
{{ Form::hidden('user_id',auth()->user()->id) }}


<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="8">1. ¿La báscula tiene un gran poder sobre ti? ¿Es capaz de cambiar tu estado de humor?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg1', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg1', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg1', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg1', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">2. ¿Tienes antojos por ciertos alimentos especificos?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg2', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg2', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg2', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg2', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">3. ¿Te cuesta parar de comer alimentos dulces, especialmete chocolate?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg3', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg3', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg3', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg3', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">4. ¿Tienes problemas para controlar las cantidades de ciertos alimentos?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg4', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg4', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg4', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg4', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                 <tr>
                        <td colspan="8">5. ¿Comes cuando estas estresado, enfadado o aburrido?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg5', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg5', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg5', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg5', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                     <tr>
                        <td colspan="8">6. ¿Comes mas de tus alimentos favoritos, y con mas descontrol, cuando estas solo?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg6', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg6', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg6', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg6', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">7. ¿Te sientes culpable cuando tomas alimentos "prohibidos", es decir, aquellos que crees que no deberias, como los dulces o snacks?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg7', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg7', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg7', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg7', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr><tr>
                        <td colspan="8">8. Por la noche, cuando llegas cansado de trabajar ¿es cuando mas descontrol sientes en tu alimentacion?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg8', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg8', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg8', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg8', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">9. Estas a dieta, y por alguna razon comes mas de la cuenta, entonces piensas que no vale y ¿comes de forma descontrolada aquellos alimentos que piensas que mas te van a engordar?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg9', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg9', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg9', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg9', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8">10. ¿Cuantas veces sientes que la comida te controla a ti en vez de tu a ella?</td>
                    </tr>
                    <tr>
                        <td class="align-bottom text-center"><div>{{ Form::radio('pg10', '0')}}</div> <br><div class="align-bottom text-center">Nunca</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg10', '1')}}</div> <br><div class="align-bottom text-center">A veces</div>
                        </td> 
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg10', '2')}}</div> <br><div class="align-bottom text-center">Generalmente</div>
                        </td>
                        <td> <td class="align-bottom text-center"><div>{{ Form::radio('pg10', '3')}}</div> <br><div class="align-bottom text-center">Siempre</div>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>


<br>
<div class="form-group">
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
</div>                  