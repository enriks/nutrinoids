
{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Bebidas</th>
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
    
    {{Form::label('bebidasCabonatadasAzucar', 'Bebidas carbocafeDescdas con azúcar:
bebidas con cola, limonadas, tónicas, etc. (1
botellín, 200cc)')}}
</th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '1-3 veces al mes')}} 
        </th>
        <th > 
            {{ Form::radio('bebidasCabonatadasAzucar', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCabonatadasAzucar', '6+ veces al dia')}} 
        </th>
</div>
            </tr>
<tr>
<div class="form-group">  
<th>
    
    {{Form::label('bebidasCarbonatadasBajasCalorias', 'Bebidas carbocafeDescdas bajas en
calorías, bebidas light (1 botellín, 200cc)')}}
</th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('bebidasCarbonatadasBajasCalorias', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
    
<div class="form-group"> <th>
    
   {{Form::label('zumoNaranja', 'Zumo de naranja natural (1 vaso,
200cc)')}}
</th>
        <th >
            {{ Form::radio('zumoNaranja', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('zumoNaranja', '6+ veces al dia')}} 
        </th>
</div>
</tr>
<tr>
<div class="form-group"> <th>
    
   {{Form::label('zumoOtrasFrutas', 'Zumos naturales de otras frutas (1
vaso, 200cc)')}}
</th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('zumoOtrasFrutas', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
    
<div class="form-group"> 
       <th>
           
             {{Form::label('cafeDesc', 'Café descafeinado (1 taza, 50cc)')}}
       </th>
        <th >
            {{ Form::radio('cafeDesc', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('cafeDesc', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cafeDesc', '6+ veces al dia')}} 
        </th>
</div>
</tr>
<tr>
<div class="form-group">  
       <th>
           
           {{Form::label('cafe', 'Café (1 taza, 50cc)')}}
       </th>
        <th >
            {{ Form::radio('cafe', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('cafe', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cafe', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group"> 
       <th>
           
             {{Form::label('te', 'Té (1 taza, 50cc)')}}
       </th>
        <th >
            {{ Form::radio('te', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('te', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('te', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('te', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('te', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('te', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('te', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('te', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('te', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group"> 
       <th>
           
             {{Form::label('mosto', 'Mosto (100cc)')}}
       </th>
        <th >
            {{ Form::radio('mosto', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('mosto', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('mosto', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">   
       <th>
           
         {{Form::label('vinoRosado', 'Vaso de vino rosado (100cc)')}}
       </th>
        <th >
            {{ Form::radio('vinoRosado', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('vinoRosado', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoRosado', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group"> 
       <th>
           
             {{Form::label('vinoMoscatel', 'Vaso de vino moscatel (50cc)')}}
       </th>
        <th >
            {{ Form::radio('vinoMoscatel', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoMoscatel', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">  
<th>
    
    {{Form::label('vinoTintoJoven', 'Vaso de vino tinto joven, del año
(100cc)')}}
</th>
        <th >
            {{ Form::radio('vinoTintoJoven', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoJoven', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">   <th>
    
        {{Form::label('vinoTintoAñejo', 'Vaso de vino tinto añejo (100cc)')}}
</th>
        <th >
            {{ Form::radio('vinoTintoAñejo', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoTintoAñejo', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">
       <th>
           
               {{Form::label('vinoBlanco', 'Vaso de vino blanco (100cc)')}}
       </th>
        <th >
            {{ Form::radio('vinoBlanco', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('vinoBlanco', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">   
       <th>
           
         {{Form::label('cerveza', 'Cerveza (1 jarra, 330cc)')}}
       </th>
        <th >
            {{ Form::radio('cerveza', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('cerveza', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('cerveza', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group">   
       <th>
           
         {{Form::label('licores', 'Licores, anís o anisetes... (1 copa, 50cc)')}}
       </th>
        <th >
            {{ Form::radio('licores', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('licores', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('licores', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('licores', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('licores', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('licores', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('licores', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('licores', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('licores', '6+ veces al dia')}} 
        </th>
</div>
    
</tr>
<tr>
<div class="form-group"> 
<th>
    
      {{Form::label('destilados', 'Destilados: whisky, vodka, ginebra,coñac (1 copa, 50cc)')}}
</th>
        <th >
            {{ Form::radio('destilados', 'Nunca o casi nunca')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '1-3 veces al mes')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '1 vez a la semana')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '2-4 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '5-6 veces a la semana')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '1 vez al dia')}}
        </th>
        <th >
            {{ Form::radio('destilados', '2-3 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '4-6 veces al dia')}} 
        </th>
        <th >
            {{ Form::radio('destilados', '6+ veces al dia')}} 
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