/***Script para que funcione el date picker****/
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
    
	});


function agregarQuitar() {///Muestra/Esconde las opciones 
    $("#mostrarEstadodirInd").toggle("slow");
    };

    
function mostrarFormlulario() {///Muestra el formulario cuando se quiere agregar un nuevo actor
	
    $("#formCargInd").hide("slow");
    $("#formInd").show("slow");
    };
function mostrarFormlularioTrans() {///Muestra el formulario cuando se quiere agregar un nuevo actor
	
    $("#formCargTrans").hide("slow");
    $("#formTrans").show("slow");
    };
    
function mostrarFormlularioCol() {///Muestra el formulario cuando se quiere agregar un nuevo actor
	
    $("#formCargCol").hide("slow");
    $("#formCol").show("slow");
    };

function mostrarfuncInd() {///Muestra/Esconde las opciones de casos de actor individual
    $("#mostrarCasosIndividual").toggle("slow");
    };

function mostrarfuncTrans() {///Muestra/Esconde las opciones de casos de actor transmigrante
    $("#mostrarCasosTrans").toggle("slow");
    };
     
  

function mostrarfuncCol() {///Muestra/Esconde las opciones de casos de actor Colectivo
    $("#mostrarCasosCol").toggle("slow");
    };
     
  

/************Funciones que te permiten agregar/eliminar un nuevo campo a Estado del formulario Actor Individual********************/
    
function AgrearEstadodirInd() {///Agrega Campo nuevo
	var index = $('#direccionActor_estadosCatalogo_estadoId').length + 1;
	var index2 = $("#opcionTipoDirInd").val();
	if(index2=="" || index2==" " || index2=="  "){///Si esta vacio manda un alert
		alert("El campo esta vacio")
		}
	else{
	$('#direccionActor_estadosCatalogo_estadoId').append('<option id="nuevolisEdo" value="' + index + '" selected="selected">' + index2 + '</option>'); }
 
    };
    
function QuitarEstadodirInd() {///Elimina la opcion por su id
	$("#nuevolisEdo").remove();
 
    };
/**************************Terminan las funciones del campo Estado formulario Actor Individual***********************************/



/************************Prueba de comunicación Ajax***********************/

function mostarDatosListaElem() {
	var datosActor=new Array("Siwon","Choi","Horse","hombre");
    $("#formInd").hide("slow");
    $("#formCargInd").show("slow");
	$('#actores_nombreV').html(datosActor[0]); 
	$('#actores_apellidosSiglasV').html(datosActor[1]); 
	$('#alias_aliasV').html(datosActor[2]); 
	$('#infoGralActor_generoidV').html(datosActor[3]); 
    };
/*******************************************************************/
