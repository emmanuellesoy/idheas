/***Script para que funcione el date picker****/
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
//////FECHA INTERVENCIÓN
	$(function() {
		$( "#datepickerIntervencion" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });

/////////FECHA INICIAL CASOS

	$(function() {
		$( "#fechaExacta" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fechaAprox" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fechaSinDia" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fechaSinDiaSinMes" ).datepicker({ dateFormat: "yy-00-00"});
		});
		
/////////FECHA TERMINAL CASOS
		
	$(function() {
		$( "#fechaExacta2" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fechaAprox2" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fechaSinDia2" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fechaSinDiaSinMes2" ).datepicker({ dateFormat: "yy-00-00"});
		});
		
		

/////////FECHA INICIAL ACTOS

	$(function() {
		$( "#fechaExactaAct" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fechaAproxAct" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fechaSinDiaAct" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fechaSinDiaSinMesAct" ).datepicker({ dateFormat: "yy-00-00"});
		});
		
/////////FECHA TERMINAL ACTOS
		
	$(function() {
		$( "#fechaExactaAct2" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fechaAproxAct2" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fechaSinDiaAct2" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fechaSinDiaSinMesAct2" ).datepicker({ dateFormat: "yy-00-00"});
		});
		


/*************************************************************/
///Muestra/Esconde las opciones de los campos a agregar

///funciones del formulario Actor individual

function agregarQuitar(){ 
    $("#mostrarEstadodirInd").toggle("slow");
    };


///funciones del formulario Actor transmigrante



///funciones del formulario Actor colectivo


/*************************************************************/
///Terminan las funciones que muestran/esconden las opciones de los campos

///Muestra el formulario cuando se quiere agregar un nuevo actor
function mostrarAgregarCasos() {   	
    $("#vistaDeCasos").hide("slow");
    $("#vistaDeFormCasos").show("slow");
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



     
  /********************************/
  ///Función que agrega name a lafecha seleccionada en caso
  function fechaInicialCasos(a){
		  if(a=="1"){
			$('#fechaAprox').attr('name', ' ');
			$('#fechaSinDia').attr('name', ' ');
			$('#fechaSinDiaSinMes').attr('name', ' ');
			$('#fechaExacta').attr('name', 'casos_fechaInicial');
			$("#fechaAproxV").hide();
			$("#fechaSinDiaV").hide();
			$("#fechaSinDiaSinMesV").hide();
			$("#fechaExactaV").show("slow");
		  }
		  else if (a=="2"){
			$("#fechaSinDiaSinMesV").hide();
			$("#fechaSinDiaV").hide();
			$("#fechaExactaV").hide();
			$("#fechaAproxV").show("slow");
			$('#fechaSinDia').attr('name', ' ');
			$('#fechaSinDiaSinMes').attr('name', ' ');
			$('#fechaExacta').attr('name', ' ');
			$('fechaAprox').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fechaAproxV").hide();
			$("#fechaSinDiaSinMesV").hide();
			$("#fechaExactaV").hide();
			$("#fechaSinDiaV").show("slow");
			$('fechaSinDiaSinMes').attr('name', ' ');
			$('#fechaExacta').attr('name', ' ');
			$('#fechaAprox').attr('name', ' ');
			$('#fechaSinDia').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="4"){;
			$("#fechaAproxV").hide();
			$("#fechaSinDiaV").hide();
			$("#fechaExactaV").hide();
			$("#fechaSinDiaSinMesV").show("slow");
			$('#fechaExacta').attr('name', ' ');
			$('#fechaAprox').attr('name', ' ');
			$('#fechaSinDia').attr('name', '');
			$('#fechaSinDiaSinMes').attr('name', 'casos_fechaInicial');
		  }
	  
	  }
     
  /********************************/
  ///Función que agrega name a lafecha seleccionada caso
  function fechaTerminalCasos(a){
		  if(a=="1"){
			$('#fechaAprox2').attr('name', ' ');
			$('#fechaSinDia2').attr('name', ' ');
			$('#fechaSinDiaSinMes2').attr('name', ' ');
			$('#fechaExacta2').attr('name', 'casos_fechaInicial');
			$("#fechaAproxV2").hide();
			$("#fechaSinDiaV2").hide();
			$("#fechaSinDiaSinMesV2").hide();
			$("#fechaExactaV2").show("slow");
		  }
		  else if (a=="2"){
			$("#fechaSinDiaSinMesV2").hide();
			$("#fechaSinDiaV2").hide();
			$("#fechaExactaV2").hide();
			$("#fechaAproxV2").show("slow");
			$('#fechaSinDia2').attr('name', ' ');
			$('#fechaSinDiaSinMes2').attr('name', ' ');
			$('#fechaExacta2').attr('name', ' ');
			$('fechaAprox2').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fechaAproxV2").hide();
			$("#fechaSinDiaSinMesV2").hide();
			$("#fechaExactaV2").hide();
			$("#fechaSinDiaV2").show("slow");
			$('fechaSinDiaSinMes2').attr('name', ' ');
			$('#fechaExacta2').attr('name', ' ');
			$('#fechaAprox2').attr('name', ' ');
			$('#fechaSinDia2').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="4"){;
			$("#fechaAproxV2").hide();
			$("#fechaSinDiaV2").hide();
			$("#fechaExactaV2").hide();
			$("#fechaSinDiaSinMesV2").show("slow");
			$('#fechaExacta2').attr('name', ' ');
			$('#fechaAprox2').attr('name', ' ');
			$('#fechaSinDia2').attr('name', '');
			$('#fechaSinDiaSinMes2').attr('name', 'casos_fechaInicial');
		  }
	  
	  }




  /********************************/
  ///Función que agrega name a lafecha seleccionada en acto
  function fechaInicialCasosActos(a){
		  if(a=="1"){
			$('#fechaAproxAct').attr('name', ' ');
			$('#fechaSinDiaAct').attr('name', ' ');
			$('#fechaSinDiaSinMesAct').attr('name', ' ');
			$('#fechaExactaAct').attr('name', 'nucleCaso_fechaInicio');
			$("#fechaAproxVAct").hide();
			$("#fechaSinDiaVAct").hide();
			$("#fechaSinDiaSinMesVAct").hide();
			$("#fechaExactaVAct").show("slow");
		  }
		  else if (a=="2"){
			$("#fechaSinDiaSinMesVAct").hide();
			$("#fechaSinDiaVAct").hide();
			$("#fechaExactaVAct").hide();
			$("#fechaAproxVAct").show("slow");
			$('#fechaSinDiaVAct').attr('name', ' ');
			$('#fechaSinDiaSinMesVAct').attr('name', ' ');
			$('#fechaExactaVAct').attr('name', ' ');
			$('fechaAproxVAct').attr('name', 'nucleCaso_fechaInicio');
		  }
		  else if (a=="3"){
			$("#fechaAproxVAct").hide();
			$("#fechaSinDiaSinMesVAct").hide();
			$("#fechaExactaVAct").hide();
			$("#fechaSinDiaVAct").show("slow");
			$('fechaSinDiaSinMesVAct').attr('name', ' ');
			$('#fechaExactaVAct').attr('name', ' ');
			$('#fechaAproxVAct').attr('name', ' ');
			$('#fechaSinDiaVAct').attr('name', 'nucleCaso_fechaInicio');
		  }
		  else if (a=="4"){;
			$("#fechaAproxVAct").hide();
			$("#fechaSinDiaVAct").hide();
			$("#fechaExactaVAct").hide();
			$("#fechaSinDiaSinMesVAct").show("slow");
			$('#fechaExactaVAct').attr('name', ' ');
			$('#fechaAproxVAct').attr('name', ' ');
			$('#fechaSinDiaVAct').attr('name', '');
			$('#fechaSinDiaSinMesVAct').attr('name', 'nucleCaso_fechaInicio');
		  }
	  
	  }
     
  /********************************/
  ///Función que agrega name a lafecha seleccionada acto
  function fechaTerminalCasosActos(a){
		  if(a=="1"){
			$('#fechaAproxAct2').attr('name', ' ');
			$('#fechaSinDiaAct2').attr('name', ' ');
			$('#fechaSinDiaSinMesAct2').attr('name', ' ');
			$('#fechaExactaAct2').attr('name', 'casos_fechaTermino');
			$("#fechaAproxVAct2").hide();
			$("#fechaSinDiaVAct2").hide();
			$("#fechaSinDiaSinMesVAct2").hide();
			$("#fechaExactaVAct2").show("slow");
		  }
		  else if (a=="2"){
			$("#fechaSinDiaSinMesVAct2").hide();
			$("#fechaSinDiaVAct2").hide();
			$("#fechaExactaVAct2").hide();
			$("#fechaAproxVAct2").show("slow");
			$('#fechaSinDiaAct2').attr('name', ' ');
			$('#fechaSinDiaSinMesActAct2').attr('name', ' ');
			$('#fechaExactaAct2').attr('name', ' ');
			$('fechaAproxAct2').attr('name', 'casos_fechaTermino');
		  }
		  else if (a=="3"){
			$("#fechaAproxVAct2").hide();
			$("#fechaSinDiaSinMesVAct2").hide();
			$("#fechaExactaVAct2").hide();
			$("#fechaSinDiaVAct2").show("slow");
			$('fechaSinDiaSinMesAct2').attr('name', ' ');
			$('#fechaExactaAct2').attr('name', ' ');
			$('#fechaAproxAct2').attr('name', ' ');
			$('#fechaSinDiaAct2').attr('name', 'casos_fechaTermino');
		  }
		  else if (a=="4"){;
			$("#fechaAproxVAct2").hide();
			$("#fechaSinDiaVAct2").hide();
			$("#fechaExactaVAct2").hide();
			$("#fechaSinDiaSinMesVAct2").show("slow");
			$('#fechaExactaAct2').attr('name', ' ');
			$('#fechaAproxAct2').attr('name', ' ');
			$('#fechaSinDiaAct2').attr('name', '');
			$('#fechaSinDiaSinMesAct2').attr('name', 'casos_fechaTermino');
		  }
	  
	  }






/************Funciones que te permiten agregar/eliminar un nuevo campo a Estado del formulario Actor Individual********************/
    
function AgrearEstadodirInd() {///Agrega Campo nuevo
	var index = $('#direccionActor_estadosCatalogo_estadoId').length + 1;
	var index2 = $("#opcionTipoDirInd").val();
	if(index2=="" || index2==" " || index2=="  "){///Si esta vacio manda un alert
		alert("El campo esta vacio");
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
