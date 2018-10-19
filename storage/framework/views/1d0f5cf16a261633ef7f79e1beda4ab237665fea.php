



<div class="container">
   <div class="row">
       <div class="col-md-12 col-md-offset-2">
                <table class="table table-striped">
                <tr>
                    <th >Pregunta</th>
                    <th class="text-center">Modo de valoración</th>
                    <th >Puntos</th>
                </tr>
                <tr >
                    <td>¿Usa usted el aceite de oliva principalmente para cocinar?</td>
                    <td class="text-center"> Si </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg1', '1')); ?></td>
                    </div>
                </tr>
                <tr>
                    <td>¿Cuánto aceite de oliva consume en total al día (incluyendo el usado para freír, el de las comidas fuera de casa, <br>las ensaladas, etc.)? </td>
                    <td class="text-center"> Almenos dos cucharadas </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg2', '1')); ?></td>
                    </div>
                </tr>
                <tr>
                    <td>¿Cuántas raciones de verdura u hortalizas consume al día (las guarniciones o acompañamientos contabilizan como 1⁄2 ración)?</td>
                    <td class="text-center"> Dos o más al día </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg3', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas piezas de fruta (incluyendo zumo natural) consume al día?</td>
                    <td class="text-center"> Tres o más al día </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg4', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas raciones de carnes rojas, hamburguesas, salchichas o embutidos consume al día (una ración equivale a 100-150 gr.)?</td>
                    <td class="text-center"> Menos de una al día </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg5', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas raciones de mantequilla, margarina o nata consume al día porción individual equivale a 12 gr)?</td>
                    <td class="text-center"> Menos de una al día </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg6', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas bebidas carbonatadas y/o azucaradas (refrescos, colas, tónicas, bitter) consume al día?</td>
                    <td class="text-center"> Menos de una al día </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg7', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Bebe vino? ¿Cuánto consume a la semana?</td>
                    <td class="text-center"> Tres o más vasos por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg8', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas raciones de legumbres consume a la semana (una ración o plato equivale a 150 gr)?</td>
                    <td class="text-center"> Tres o más por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg9', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas raciones de pescado o mariscos consume a la semana (un plato, pieza o ración equivale a 100-150 gr de pescado ó 4-5 piezas de marisco)?</td>
                    <td class="text-center"> Tres o más por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg10', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas veces consume repostería comercial (no casera) como galletas, flanes, dulces o pasteles a la semana?</td>
                    <td class="text-center"> Menos de tres por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg11', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas veces consume frutos secos a la semana (una ración equivale a 30 gr)?         
                    </td>
                    <td class="text-center"> Una o más por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg12', '1')); ?></td>
                    </div>
                </tr>
                <tr>
                    <td>¿Consume preferentemente carne de pollo, pavo o conejo en vez de ternera, cerdo, hamburguesas o salchichas (carne de pollo: una pieza o ración equivale a 100- 150 gr)?          
                    </td>
                    <td class="text-center"> Si </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg13', '1')); ?></td>
                    </div>
                </tr>

                <tr>
                    <td>¿Cuántas veces a la semana consume los vegetales cocinados, la pasta, el arroz u otros platos aderezados con una salsa de tomate, ajo, cebolla o puerro elaborada a fuego lento con aceite de oliva (sofrito)?
                    </td>
                    <td class="text-center"> Dos o más por semana </td>
                    <div class="form-group">
                        <td align="center"> <?php echo e(Form::checkbox('pg13', '1')); ?></td>
                    </div>
                </tr>

               
            </table>
        </div>
    </div>
</div>


<br>
<div class="form-group">
    <?php echo e(Form::submit('Guardar y Continuar',['class'=> 'btn btn-sm btn-primary'])); ?>

</div>                  