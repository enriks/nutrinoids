function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "cuestionarios"; }
        if(arg==2){ var url = "form_cargar_datos_sujetos"; }

		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

            })
    
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul1){
		        $("#contenido_principal").html(resul1);

		    })


}

function cargarlistado(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "listado_sujetos"; }
$("#contenido_principal").html($("#cargador_empresa").html());

    
    $.get(url,function(resul){

        $("#contenido_principal").html(resul); 
   })



}


 $(document).on("submit",".form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        var rs=false; //leccion 10
        var seccion_sel=  $("#seccion_seleccionada").val();

        
        if(quien=="f_nuevo_sujeto"){ var varurl="agregar_nuevo_sujeto"; var divresul="notificacion_resul_fanu";rs=true;}
        if(quien=="f_editar_sujeto"){ var varurl="editar_sujeto"; var divresul="notificacion_resul_feu"; }
        if(quien=="f_cambiar_password"){ var varurl="cambiar_password"; var divresul="notificacion_resul_fcp"; }
        if(quien=="f_agregar_antro"){ var varurl="agregar_antro_sujeto"; var divresul="notificacion_resul_fantro";rs=true; }
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        if(rs ){
                         $('#'+quien+'').trigger("reset");
                         mostrarseccion(seccion_sel);
                    }

                    }

                });

         

})

    
$(document).on("click",".pagination li a",function(e){

    e.preventDefault();
   
    var url =$( this).attr("href");
    $("#contenido_principal").html($("#cargador_empresa").html());
   
       
       $.get(url,function(resul){
   
           $("#contenido_principal").html(resul); 
      })
    })   

    function mostrarficha(id_sujeto) {
        //funcion para mostrar y etditar la informacion del sujeto
        $("#capa_modal").show();
        $("#capa_para_edicion").show();
        var url = "form_editar_sujeto/"+id_sujeto+""; 
        //$("#contenido_capa_edicion").html($("#cargador_empresa").html());  
        $.get(url,function(resul){
        $("#contenido_capa_edicion").html(resul);  
        })
      
      }
      
      
      $(document).on("click",".div_modal",function(e){
       //funcion para ocultar las capas modales
       $("#capa_modal").hide();
       $("#capa_para_edicion").hide();
       $("#contenido_capa_edicion").html("");
      
      })  

   /*   $(document).on("submit",".formarchivo",function(e){

     
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");

        if(nombreform=="f_subir_imagen" ){ var miurl="subir_imagen_sujeto";  var divresul="notificacion_resul_fci"}
        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
              $("#fotografia_sujeto").attr('src', $("#fotografia_sujeto").attr('src') + '?' + Math.random() );               
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }
        });
    });*/
    $(document).on("submit",".formarchivo",function(e){

     
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");

        if(nombreform=="f_subir_imagen" ){ var miurl="subir_imagen_sujeto";  var divresul="notificacion_resul_fci"}
        if(nombreform=="f_cargar_datos_sujetos" ){ var miurl="cargar_datos_sujetos";  var divresul="notificacion_resul_fcdu"}

        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
              $("#fotografia_sujeto").attr('src', $("#fotografia_sujeto").attr('src') + '?' + Math.random() );               
            },
            //si ha ocurrido un error
            error: function(data){
               alert("Iñaki:Esta funcionalidad futura está a la espera de la salida de la versión 3.1 de la librería de Excel.Por favor, retornar al home") ;
                
            }
        });
    });

    function mostrarseccion(arg){
        var sujeto_id=$("#sujeto_seleccionado").val(); 
        $("#seccion_seleccionada").val(arg);
        if(arg==1){ var url = "form_editar_sujeto/"+sujeto_id+""; }
        if(arg==2){ var url = "form_antro_sujeto/"+sujeto_id+""; } 
        $("#contenido_capa_edicion").html($("#cargador_empresa").html());
        $.get(url,function(resul){
        $("#contenido_capa_edicion").html(resul);
        })
      
      }
      
      
      function borrarantro(arg){
      var url="borrar_antro/"+arg+"" ;
      var divresul="notificacion_resul_fantro";
      $("#"+divresul+"").html($("#cargador_empresa").html());
      
      $.get(url,function(resul){
        $("#"+divresul+"").html(resul);
        mostrarseccion(2);
      })
      
      }
      