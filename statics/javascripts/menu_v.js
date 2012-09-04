/***Script para que funcione el date picker****/
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
    
	});


    
function mostrarFormlulario() {///Muestra el formulario cuando se quiere agregar un nuevo actor
	
    $("#formCargInd").hide("slow");
    $("#formInd").show("slow");
    };
    
/************Funciones que te permiten agregar/eliminar un nuevo campo a Estado del formulario Actor Individual********************/

function mostarEstadodirfunc() {///Muestra/Esconde las opciones para agregar/quitar campo
    $("#showEstadodir").toggle("slow");
    };
    
  
    
function AgrearEstadodir() {///Agrega Campo nuevo
	var index = $('#listaEstadodir option').length + 1;
	var index2 = $("#opcionTipoDir").val();
	if(index2=="" || index2==" " || index2=="  "){///Si esta vacio manda un alert
		alert("El campo esta vacio")
		}
	else{
	$('#listaEstadodir').append('<option id="nuevolisEdo" value="' + index + '" selected="selected">' + index2 + '</option>'); }
 
    };
    
function QuitarEstadodir() {///Elimina la opcion por su id
	$("#nuevolisEdo").remove();
 
    };
/**************************Terminan las funciones del campo Estado formulario Actor Individual***********************************/



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
