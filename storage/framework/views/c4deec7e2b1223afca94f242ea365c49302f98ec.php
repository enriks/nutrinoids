
<?php echo e(Form::hidden('user_id',auth()->user()->id)); ?>



<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
        <div class="form-group">
            <?php echo e(Form::label('fecha','Fecha a registrar')); ?>

            <?php echo e(Form::date('fecha', null, ['class'=> 'form-control', 'id'=>'fecha'])); ?>

        </div>
                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Desayuno</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('desHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('desLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'desLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('desAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'desAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('desBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'desBebida'])); ?></div>
                    </tr>
                   
                </table>

               <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Media mañana</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('memaHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('memaLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'memaLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('memaAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'memaAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('memaBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'memaBebida'])); ?></div>
                    </tr>
                   
                </table>


                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Comida</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('comHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('comLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'comLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('comAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'comAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('comBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'comBebida'])); ?></div>
                    </tr>
                   
                </table>


                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Merienda</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('meriHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('meriLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'meriLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('meriAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'meriAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('meriBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'meriBebida'])); ?></div>
                    </tr>
                   
                </table>




                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Cena</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('cenHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('cenLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'cenLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('cenAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'cenAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('cenBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'cenBebida'])); ?></div>
                    </tr>
                   
                </table>



                <table class="table table-striped">
                   
                    <tr>
                        <td colspan="2"><h1>Entre horas</h1></td>
                        <td colspan="1">Hora</td>
                        <td colspan="1"><?php echo Form::time('picHora',null, ['class' => 'form-control']); ?></td>
                        <td colspan="1">Lugar</td>
                        <td colspan="1"><?php echo e(Form::text('picLugar', null, ['class'=> 'form-control','placeholder'=>'..' , 'id'=>'picLugar'])); ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><div>Alimentos consumidos + Cantidad</div><br><div><?php echo e(Form::textarea('picAlimento', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'picAlimento'])); ?></div>
                        </td> 
                         <td colspan="3" class="text-center"><div>Bebidas consumidas + Cantidad</div><br><div><?php echo e(Form::textarea('picBebida', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40,'id'=>'picBebida'])); ?></div>
                    </tr>
                   
                </table>

        </div>
    </div>
</div>


<br>
<div class="form-group">
    <?php echo e(Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  