/***Script para que funcione el date picker****/
$(document).ready(function(){
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		
})

function mostarEstadodirfunc() {
    $("#showEstadodir").toggle("slow");
    };
    
  
  
function mostrarFormlulario() {
	
    $("#formCargInd").hide("slow");
    $("#formInd").show("slow");
    };
    
function AgrearEstadodir() {
	var index = $('#listaEstadodir option').length + 1;
	var index2 = $("#opcionTipoDir").val();
	$('#listaEstadodir').append('<option id="agr"'+ index + ' value="' + index + '" selected="selected">' + index2 + '</option>'); 
    };
    
      
    
function QuitarEstadodir() {
	
	var index = $('#listaEstadodir option').length;
		///Elimina la opcion por su id
        $("#agr"+ index).remove();
 
    };
    
/*******************************************************************/
/************************Prueba de comunicación Ajax***********************/

function mostarDatosListaElem() {
	var datosActor=new Array("Siwon","Choi","Horse","hombre");
    $("#formInd").hide("slow");
    $("#formCargInd").show("slow");
	$('#actores_nombreV').append(datosActor[0]); 
	$('#actores_apellidosSiglasV').append(datosActor[1]); 
	$('#alias_aliasV').append(datosActor[2]); 
	$('#infoGralActor_generoidV').append(datosActor[3]); 
    };
/*******************************************************************/
