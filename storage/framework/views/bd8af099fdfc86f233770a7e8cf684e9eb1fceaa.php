<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Sujeto del Sistema</h3>
                </div>
                
                <!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_sujeto"  method="post"  action="agregar_nuevo_sujeto" class="form-horizontal form_entrada" >                
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
</div>
<div class="form-group col-xs-6">
                      <label for="apellidos">Apellidos*</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
</div>
<div class="form-group col-xs-6">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Correo" >
</div>
<div class="form-group col-xs-6">
                      <label for="fechaNac">Fecha de nacimiento*</label>
                      <input type="text" class="form-control" id="fechaNac" name="fechaNac" placeholder="Fecha de Nacimiento" >
</div>

<div class="form-group col-xs-6">
                      <label for="codigo">Código</label>
                      <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" >
</div>

</div>

<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
</div>


</form>

</div>
