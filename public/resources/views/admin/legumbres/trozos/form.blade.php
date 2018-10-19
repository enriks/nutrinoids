
{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="container">


<table class="table">
    <thead>
        <tr>
            <th>Legumbres</th>
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
          
         {{Form::label('lentejas', 'Lentejas (1 plato, 150 g cocidas)')}}
      </th>
          
       
        <th >
            {{ Form::radio('lentejas', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('lentejas', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('lentejas', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('alubias', 'Alubias (pintas, blancas o negras) (1 plato, 150 g
cocidas)')}}
      </th>
          
       
        <th >
            {{ Form::radio('alubias', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('alubias', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('alubias', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('garbanzos', 'Garbanzos (1 plato, 150 g cocidos)')}}
      </th>
          
       
        <th >
            {{ Form::radio('garbanzos', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('garbanzos', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('garbanzos', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('guisantes', 'Guisantes, habas (1 plato, 150 g cocidos)')}}
      </th>
          
       
        <th >
            {{ Form::radio('guisantes', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('guisantes', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('guisantes', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('panBlanco', 'Pan blanco, pan de molde (3 rodajas, 75 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('panBlanco', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('panBlanco', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('panBlanco', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('panNegro', 'Pan negro o integral (3 rodajas, 75 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('panNegro', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('panNegro', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('panNegro', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
    <tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('cerealesDesayuno', 'Cereales desayuno (30 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('cerealesDesayuno', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerealesDesayuno', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
    <tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('cerealesIntegrales', 'Cereales integrales: muesli, copos avena, all-bran
(30 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('cerealesIntegrales', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerealesIntegrales', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
    <tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('arrozBlanco', 'Arroz blanco (60 g en crudo)')}}}
      </th>
          
       
        <th >
            {{ Form::radio('arrozBlanco', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('arrozBlanco', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('pasta', 'Pasta: fideos, macarrones, espaguetis, otras (60
g en crudo)')}}
      </th>
          
       
        <th >
            {{ Form::radio('pasta', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('pasta', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('pasta', '6+ veces al dia')}} 
        </th>
</div>
    </tr>
<tr>
        
<div class="form-group">
     
      <th>
          
         {{Form::label('pizza', 'Pizza (1 ración, 200 g)')}}
      </th>
          
       
        <th >
            {{ Form::radio('pizza', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('pizza', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('pizza', '6+ veces al dia')}} 
        </th>
</div>
    </tr>

<tr>
    
<div class="form-group">
    <th>
        
    {{Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary']) }}
    </th>
</div>                  
</tr>

</tbody>
</table>
</div> 