
{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="container table-responsive">


<table class="table">
    <thead>
        <tr>
            <th>Miscelanea</th>
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
     
      <th>
          
         {{Form::label('croquetas', 'Croquetas, buñuelos, empanadillas,
precocinados (una)')}}
      </th>
          
       
        <th >
            {{ Form::radio('croquetas', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('croquetas', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('croquetas', '6+ veces al dia')}} 
        </th>
</div>
    </tr>

<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('sopas', 'Sopas y cremas de sobre (1 plato)')}}
      </th>
          
       
        <th >
            {{ Form::radio('sopas', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('sopas', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('sopas', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('mostaza', 'Mostaza (una cucharadita de postre)')}}
      </th>
          
       
        <th >
            {{ Form::radio('mostaza', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('mostaza', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mostaza', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('mayonesa', 'Mayonesa comercial (1 cucharada
sopera = 20 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('mayonesa', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('mayonesa', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mayonesa', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('salsaTomate', 'Salsa de tomate frito, kétchup (1 cucharadita)')}}
      </th>
          
       
        <th >
            {{ Form::radio('salsaTomate', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('salsaTomate', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('salsaTomate', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('picante', 'Picante: tabasco, pimienta, pimentón
(una pizca)')}}
      </th>
          
       
        <th >
            {{ Form::radio('picante', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('picante', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('picante', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('picante', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('picante', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('picante', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('picante', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('picante', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('picante', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('sal', 'Sal (una pizca)')}}
      </th>
          
       
        <th >
            {{ Form::radio('sal', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('sal', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('sal', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sal', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sal', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('sal', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('sal', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('sal', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('sal', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('mermeladas', 'Mermeladas (1 cucharadita)')}}
      </th>
          
       
        <th >
            {{ Form::radio('mermeladas', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('mermeladas', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mermeladas', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('azucar', 'Azúcar (1 cucharadita)')}}
      </th>
          
       
        <th >
            {{ Form::radio('azucar', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('azucar', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('azucar', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('miel', 'Miel (1 cucharadita)')}}
      </th>
          
       
        <th >
            {{ Form::radio('miel', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('miel', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('miel', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('miel', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('miel', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('miel', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('miel', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('miel', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('miel', '6+ veces al dia')}} 
        </th>
</div>
    </tr>

<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('snacks', 'Snacks distintos de patatas fritas:
gusanitos, palomitas, maíz, etc. (1 bolsa, 50 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('snacks', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('snacks', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('snacks', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('otro', 'Otros')}}
      </th>
          
       
        <th >
            {{ Form::radio('otro', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('otro', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('otro', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('otro', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('otro', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('otro', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('otro', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('otro', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('otro', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<th>
    
<div class="form-group">
   <th>
       
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
   </th>
</div>
</th>

</tbody>
</table>
</div>                                    