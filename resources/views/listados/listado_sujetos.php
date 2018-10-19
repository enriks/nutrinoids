<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">Sujetos Encontrados</h3>
                </div>

<div class="box-body">              
<?php 

if( count($sujetos) >0){
?>

<table id="tabla_pacientes" class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>email</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha Creado</th>
             
              <th>Acción</th>
            </tr>
        </thead>
 
        
       
<tbody>


<?php 

   foreach($sujetos as $sujeto){  
?>

 <tr role="row" class="odd">
    <td class="sorting_1"><?= $sujeto->id; ?></td>
    <td class="mailbox-messages mailbox-name" ><a href="javascript:void(0);" onclick="mostrarficha(<?= $sujeto->id; ?>);"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= $sujeto->nombres." ".$sujeto->apellidos;  ?></a></td>
    <td><?=  $sujeto->nombre;  ?></td>
    <td><?=  $sujeto->email;  ?></td>
    <td><?= $sujeto->fechaNac;  ?></td>
    <td><?= $sujeto->created_at ;  ?></td>
    <td><button class="btn  btn-skin-green btn-xs" onclick="mostrarficha(<?= $sujeto->id; ?>);" ><i class="fa fa-fw fa-eye"></i>Ver</button></td>
</tr>

<?php        
}
?>


  

    </table>



    <?php


echo str_replace('/?', '?', $sujetos->render() )  ;//para cuando se tiene activado el control de rutas en el servidor.Sino coloca solo $sujetos->render()

}
else
{

?>


<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun usuario...</label>  </div> 

<?php
}

?>
</div>



