{{ Form::hidden('user_id',auth()->user()->id) }}
<div class="container">
<table class="table table-fixed">
    <thead>
        <tr>
            <th>Verduras y hortalizas</th>
            <th>Nunca o casi nunca</th>
            <th>1-3 veces al mes</th>
            <th>1 vez a la semana</th>
            <th>2-4 veces a la semana</th>
            <th>5-6 veces a la semana</th>
            <th>1 vez al dia</th>
            <th>2-3 veces al dia</th>
            <th>4-6 veces al dia</th>
            <th>6+ veces al dia</th>
        </tr>
    </thead>
    <tbody>
<tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('acelgas', 'Acelgas, espinacas')}}
      </td>
          
       
        <td >
            {{ Form::radio('acelgas', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('acelgas', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('acelgas', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
    <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('col', 'Col, coliflor, brócoles')}}
      </td>
          
       
        <td >
            {{ Form::radio('col', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('col', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('col', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('col', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('col', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('col', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('col', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('col', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('col', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
        {{Form::label('lechuga', 'Lechuga, endivias, escarola(100 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('lechuga', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('lechuga', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('lechuga', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('tomateCrudo', 'Tomate crudo (1, 150 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('tomateCrudo', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('tomateCrudo', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('zanahoria', 'Zanahoria, calabaza (100 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('zanahoria', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('zanahoria', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('zanahoria', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('judiasVerdes', 'Judías verdes')}}
      </td>
          
       
        <td >
            {{ Form::radio('judiasVerdes', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('judiasVerdes', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('berenjenas', 'Berenjenas, calabacines, pepinos')}}
      </td>
          
       
        <td >
            {{ Form::radio('berenjenas', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('berenjenas', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('berenjenas', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('pimientas', 'Pimientos (150 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('pimientas', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('pimientas', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('pimientas', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
    <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('esparragos', 'Espárragos')}}
      </td>
          
       
        <td >
            {{ Form::radio('esparragos', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('esparragos', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('esparragos', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('gazpacho', 'Gazpacho andaluz (1 vaso, 200 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('gazpacho', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('gazpacho', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('gazpacho', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('otrasVerduras', 'Otras verduras (alcachofa, puerro, cardo, apio)')}}
      </td>
          
       
        <td >
            {{ Form::radio('otrasVerduras', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('otrasVerduras', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('cebolla', 'Cebolla (media unidad, 50 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('cebolla', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('cebolla', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('cebolla', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('ajo', 'Ajo (1 diente)')}}
      </td>
          
       
        <td >
            {{ Form::radio('ajo', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('ajo', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('ajo', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('perejil', 'Perejil, tomillo, laurel, orégano, etc. (una pizca)')}}
      </td>
          
       
        <td >
            {{ Form::radio('perejil', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('perejil', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('perejil', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('patatasFritasComerciales', 'Patatas fritas comerciales (1 bolsa, 50 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('patatasFritasComerciales', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasComerciales', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('patatasFritasCaseras', 'Patatas fritas caseras (1 ración, 150 g)')}}
      </td>
          
       
        <td >
            {{ Form::radio('patatasFritasCaseras', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasCaseras', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
      <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('patatasFritasAsadas', 'Patatas asadas o cocidas')}}
      </td>
          
       
        <td >
            {{ Form::radio('patatasFritasAsadas', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('patatasFritasAsadas', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
        <tr>
        
<div class="form-group">
     
      <td>
          
         {{Form::label('setas', 'Setas, níscalos, champiñones')}}
      </td>
          
       
        <td >
            {{ Form::radio('setas', 'Nunca o casi nunca')}} 
        </td>
        <td >
            {{ Form::radio('setas', '1-3 veces al mes')}} 
        </td>
        <td >
            {{ Form::radio('setas', '1 vez a la semana')}} 
        </td>
        <td >
            {{ Form::radio('setas', '2-4 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('setas', '5-6 veces a la semana')}} 
        </td>
        <td >
            {{ Form::radio('setas', '1 vez al dia')}}
        </td>
        <td >
            {{ Form::radio('setas', '2-3 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('setas', '4-6 veces al dia')}} 
        </td>
        <td >
            {{ Form::radio('setas', '6+ veces al dia')}} 
        </td>
</div>
    </tr>
    <tr>
        
<div class="form-group">
    <td>
        
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
    </td>
</div>           
    </tr>
</table>
</div>  