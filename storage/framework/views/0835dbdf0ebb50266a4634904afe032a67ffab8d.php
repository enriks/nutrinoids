<?php $__env->startSection('content'); ?>

          <div class="pull-left"><h3>Cuestionario</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="<?php echo e(route('estilocontodo.create')); ?>" class="btn btn-info" >Cuestionario</a>
            </div>
          </div>
          <div class="table-container">

<table id="mytable" class="table table-bordred table-striped">
             <thead>
    <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellidos</th>
        <th class="text-center">Código</th>
        <th class="text-center">fecha de Nacimiento</th>
        <th class="text-center">sexo</th>
        <th class="text-center">nacionalidad</th>
        <th class="text-center">comunidadAutonoma</th>
        <th class="text-center">poblaciones</th>
        <th class="text-center">Situación Laboral</th>
        <th class="text-center">Peso</th>
        <th class="text-center">Talla</th>
        <th class="text-center">IMC</th>
        <th class="text-center">metBasal</th>
        <th class="text-center">masaGrasa</th>
        <th class="text-center">MasaLibre</th>
        <th class="text-center">Masa Músculo</th>
        <th class="text-center">Masa Ósea</th>
        <th class="text-center">agua</th>
        <th class="text-center">nivel de estudio</th>
        <th class="text-center">estudio actual</th>
        <th class="text-center">nivel estudio Padre</th>
        <th class="text-center">nivelEstudioMadre</th>
        <th class="text-center">Ns-NC</th>
        <th class="text-center">practica</th>
        <th class="text-center">masApetito</th>
        <th class="text-center">tardasComer</th>
        <th class="text-center">alimentosPreferidos</th>
        <th class="text-center">alimentosNoConsumidos</th>
        <th class="text-center">alimentosConsumoNoAgradan</th>
        <th class="text-center">alimentosIndigestos</th>
        <th class="text-center">consumoFrutas</th>
        <th class="text-center">consumoVerduras</th>
        <th class="text-center">tecnicas</th>
        <th class="text-center">quienCocina</th>
        <th class="text-center">tipoCoccion</th>
        <th class="text-center">gustaCocinar</th>
        <th class="text-center">gustaComprar</th>
        <th class="text-center">frecuenciaCompra</th>
        <th class="text-center">ingesta</th>
        <th class="text-center">alergiaAlimentaria</th>
        <th class="text-center">sustanEstimulante</th>
        <th class="text-center">horasSueño</th>
        <th class="text-center">calidadSueño</th>
        <th class="text-center">hidratación</th>
        <th class="text-center">deposiciones</th>
        <th class="text-center">create_at</th>
        <th class="text-center">update_at</th>
    </tr>
  </thead>
  <tbody>
  <?php if($estilocontodos->count()): ?>  
    <?php $__currentLoopData = $estilocontodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estilocontodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td class="text-center"><?php echo e($estilocontodo->nombre); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->apellidos); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->codigo); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->fechaNac); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->sexo); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->nacionalidad); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->comunidadAutonoma); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->poblaciones); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->situacionLaboral); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->peso); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->talla); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->imc); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->metBasal); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->masaGrasa); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->masaLibre); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->masaMusculo); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->masaOsea); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->agua); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->nivelEstudio); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->estudioActual); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->nivelEstudioPadre); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->nivelEstudioMadre); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->NS_NC); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->practica); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->masApetito); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->tardasComer); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->alimentosPreferidos); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->alimentosNoConsumidos); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->alimentosConsumoNoAgradan); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->alimentosIndigestos); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->consumoFrutas); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->consumoVerduras); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->tecnicas); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->quienCocina); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->tipoCoccion); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->gustaCocinar); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->gustaComprar); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->frecuenciaCompra); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->ingesta); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->alergiaAlimentaria); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->sustanEstimulante); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->horasSueño); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->calidadSueño); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->hidratación); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->deposiciones); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->created_at); ?></td>
        <td class="text-center"><?php echo e($estilocontodo->update_at); ?></td>
        

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              <?php endif; ?>
            </tbody>

          </table>
        
      </div>
      <script src="js/jquery-1.8.2"></script>
      <script src="js/highcharts.js"></script>
      <script src="js/exporting.js"></script>
      <script src="highcharts-more.js"></script>
      <table class="table table-striped table-bordered table-hover" id="sample_1">
<tr><td>	
        

<script type="text/javascript"> 
<?php //dd($data);?>		
$(function () {
        $('#graficos').highcharts({
            chart: {
                type: 'scatter',
                zoomType: 'xy'
            },
            title: {
                text: 'Proceso de Extracción de Reglas'
            },
            subtitle: {
                text: 'Fuente: Investigaciones Sociales CIPS'
            },
           xAxis: {
                title: {
                    enabled: true,
                    text: 'espacio grupal'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'espacio grupal'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 0,
                y: 0,
                floating: true,
                backgroundColor: '#FFFFFF',
                borderWidth: 1
            },
            plotOptions: {
                scatter: {
                    marker: {
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true,
                                lineColor: 'rgb(100,100,100)'
                            }
                        }
                    },
                    states: {
                        hover: {
                            marker: {
                                enabled: false
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br>',
                        pointFormat: '{point.x}, {point.y}'
                    }
                }
            },
            series: [{
                name: 'Sexo',
                color: 'rgba(223, 83, 83, .5)',
                 data:[<?php foreach($data as $dat):?>
				                 <?php echo $array=json_encode($dat);?>,
					   <?php endforeach; ?>]
    
            }, {
                name: 'Nacionalidad',
                color: 'rgba(119, 152, 191, .5)',
                data: [<?php foreach($data1 as $dat1):?>
				                 <?php echo $array1=json_encode($dat1);?>,
					   <?php endforeach; ?>]
            }]
        });
    });
    

		</script>
</div>
</td>
  </tr>        
</tbody>
							</table>
    
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>