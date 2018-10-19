function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "form_nuevo_usuario"; }
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		$.get(url,function(resul){
      $("#contenido_principal").html(resul);
    })
        

}





function cargarlistado(listado){

    //funcion para cargar los diferentes  en general

if(listado==1){ var url = "listado_usuarios"; }
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
        
        if(quien=="f_nuevo_usuario"){ var varurl="agregar_nuevo_usuario"; var divresul="notificacion_resul_fanu"; }
        if(quien=="f_editar_usuario"){ var varurl="editar_usuario"; var divresul="notificacion_resul_feu"; }
   
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");

                    }

                });


})


$(document).on("click",".pagination li a",function(e){
//para que la pagina se cargen los elementos
 e.preventDefault();
 var url =$( this).attr("href");
 $("#contenido_principal").html($("#cargador_empresa").html());
 $.get(url,function(resul){
    $("#contenido_principal").html(resul); 
 })

})


  //leccion 7 
function mostrarficha(id_usuario) {
  //funcion para mostrar y etditar la informacion del usuario
  $("#capa_modal").show();
  $("#capa_para_edicion").show();
  var url = "form_editar_usuario/"+id_usuario+""; 
  $("#capa_para_edicion").html($("#cargador_empresa").html());
  $.get(url,function(resul){
      $("#capa_para_edicion").html(resul);
  })

}


$(document).on("click",".div_modal",function(e){
 //funcion para ocultar las capas modales
 $("#capa_modal").hide();
 $("#capa_para_edicion").hide();
 $("#capa_para_edicion").html("");

})  