/***Script para que funcione el date picker****/
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
	$(function() {
		$( "#infoAdicional_fechaAcceso" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
		 
	$(function() {
		$( "#casosfechaInicial" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
	$(function() {
		$( "#casosfechaTermino" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
////fecha de la publicacion
	$(function() {
		$( "#infoAdicional_fechaPublicacion" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
		 
//////FECHA INTERVENCIÓN
	$(function() {
		$( "#datepickerIntervencion" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });

/////////fECHA FICHA INICIAL CASOS sin R

	$(function() {
		$( "#fichaExacta" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fichaAprox" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fichaSinDia" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fichaSinDiaSinMes" ).datepicker({ dateFormat: "yy-00-00"});
		});
		

/////////fECHA FICHA INICIAL CASOS

	$(function() {
		$( "#fichaExactaR" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fichaAproxR" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fichaSinDiaR" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fichaSinDiaSinMesR" ).datepicker({ dateFormat: "yy-00-00"});
		});
		

/////////fECHA INFORMACION PERSONAL

	$(function() {
		$( "#fechaExactaIP" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fechaAproxIP" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fechaSinDiaIP" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fechaSinDiaSinMesIP" ).datepicker({ dateFormat: "yy-00-00"});
		});
	

/////////fECHA FICHA INICIAL CASOS

	$(function() {
		$( "#fichaExactaIP" ).datepicker({ dateFormat: "yy-mm-dd",
		changeYear: true });
		 });
    

	$(function() {
		$( "#fichaAproxIP" ).datepicker({ dateFormat: "yy-mm-dd"});
		 });
    
/***Script para cambiar el año y el mes****/
	$(function() {
		$( "#fichaSinDiaIP" ).datepicker({ dateFormat: "yy-mm-00"});
		});

/***Funcion para cambiar el año****/
	$(function() {
		$( "#fichaSinDiaSinMesIP" ).datepicker({ dateFormat: "yy-00-00"});
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


function mostrarDetallesLugar() {
    $("#detallesLugarMostrar").toggle("slow");
    };
    
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


function pestania1() {///Muestra/Esconde las opciones de casos de actor Colectivo
			$("#selccPerTrans").hide();
			$("#selccPerInd").show("slow");
    };

function pestania2() {///Muestra/Esconde las opciones de casos de actor Colectivo
			$("#selccPerTrans").show("slow");
			$("#selccPerInd").hide();
    };


  ///Función que agrega name a la fecha seleccionada en caso
  function Detalleinfo(a){
		  if(a=="1"){
			$('#fechaAproxIP').attr('name', ' ');
			$('#fechaSinDiaIP').attr('name', ' ');
			$('#fechaSinDiaSinMesIP').attr('name', ' ');
			$('#fechaExactaIP').attr('name', 'fuenteInfoPersonal_fecha');
			$("#fechaAproxVIP").hide();
			$("#fechaSinDiaVIP").hide();
			$("#fechaSinDiaSinMesVIP").hide();
			$("#fechaExactaVIP").show("slow");
		  }
		  else if (a=="2"){
			$("#fechaSinDiaSinMesVIP").hide();
			$("#fechaSinDiaVIP").hide();
			$("#fechaExactaVIP").hide();
			$("#fechaAproxVIP").show("slow");
			$('#fechaSinDiaIP').attr('name', ' ');
			$('#fechaSinDiaSinMesIP').attr('name', ' ');
			$('#fechaExactaIP').attr('name', ' ');
			$('#fechaAproxIP').attr('name', 'fuenteInfoPersonal_fecha');
		  }
		  else if (a=="3"){
			$("#fechaAproxVIP").hide();
			$("#fechaSinDiaSinMesVIP").hide();
			$("#fechaExactaVIP").hide();
			$("#fechaSinDiaVIP").show("slow");
			$('#fechaSinDiaSinMesIP').attr('name', ' ');
			$('#fechaExactaIP').attr('name', ' ');
			$('#fechaAproxIP').attr('name', ' ');
			$('#fechaSinDiaIP').attr('name', 'fuenteInfoPersonal_fecha');
		  }
		  else if (a=="4"){;
			$("#fechaAproxVIP").hide();
			$("#fechaSinDiaVIP").hide();
			$("#fechaExactaVIP").hide();
			$("#fechaSinDiaSinMesVIP").show("slow");
			$('#fechaExactaIP').attr('name', ' ');
			$('#fechaAproxIP').attr('name', ' ');
			$('#fechaSinDiaIP').attr('name', '');
			$('#fechaSinDiaSinMesIP').attr('name', 'fuenteInfoPersonal_fecha');
		  }
	  
	  }



  ///Función que agrega name a lafecha seleccionada en caso
  function fichadeRecepcionInicial(a){
		  if(a=="1"){
			$('#fichaAprox').attr('name', ' ');
			$('#fichaSinDia').attr('name', ' ');
			$('#fichaSinDiaSinMes').attr('name', ' ');
			$('#fichaExacta').attr('name', 'casos_fechaInicial');
			$("#fichaAproxV").hide();
			$("#fichaSinDiaV").hide();
			$("#fichaSinDiaSinMesV").hide();
			$("#fichaExactaV").show("slow");
		  }
		  else if (a=="2"){
			$("#fichaSinDiaSinMesV").hide();
			$("#fichaSinDiaV").hide();
			$("#fichaExactaV").hide();
			$("#fichaAproxV").show("slow");
			$('#fichaSinDia').attr('name', ' ');
			$('#fichaSinDiaSinMes').attr('name', ' ');
			$('#fichaExacta').attr('name', ' ');
			$('#fichaAprox').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fichaAproxV").hide();
			$("#fichaSinDiaSinMesV").hide();
			$("#fichaExactaV").hide();
			$("#fichaSinDiaV").show("slow");
			$('#fichaSinDiaSinMes').attr('name', ' ');
			$('#fichaExacta').attr('name', ' ');
			$('#fichaAprox').attr('name', ' ');
			$('#fichaSinDia').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="4"){;
			$("#fichaAproxV").hide();
			$("#fichaSinDiaV").hide();
			$("#fichaExactaV").hide();
			$("#fichaSinDiaSinMesV").show("slow");
			$('#fichaExacta').attr('name', ' ');
			$('#fichaAprox').attr('name', ' ');
			$('#fichaSinDia').attr('name', '');
			$('#fichaSinDiaSinMes').attr('name', 'casos_fechaInicial');
		  }
	  
	  }


  ///Función que agrega name a lafecha seleccionada en caso
  function fichadeRecepcion(a){
		  if(a=="1"){
			$('#fichaAproxR').attr('name', ' ');
			$('#fichaSinDiaR').attr('name', ' ');
			$('#fichaSinDiaSinMesR').attr('name', ' ');
			$('#fichaExactaR').attr('name', 'casos_fechaInicial');
			$("#fichaAproxVR").hide();
			$("#fichaSinDiaVR").hide();
			$("#fichaSinDiaSinMesVR").hide();
			$("#fichaExactaVR").show("slow");
		  }
		  else if (a=="2"){
			$("#fichaSinDiaSinMesVR").hide();
			$("#fichaSinDiaVR").hide();
			$("#fichaExactaVR").hide();
			$("#fichaAproxVR").show("slow");
			$('#fichaSinDiaR').attr('name', ' ');
			$('#fichaSinDiaSinMesR').attr('name', ' ');
			$('#fichaExactaR').attr('name', ' ');
			$('#fichaAproxR').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fichaAproxVR").hide();
			$("#fichaSinDiaSinMesVR").hide();
			$("#fichaExactaVR").hide();
			$("#fichaSinDiaVR").show("slow");
			$('#fichaSinDiaSinMesR').attr('name', ' ');
			$('#fichaExactaR').attr('name', ' ');
			$('#fichaAproxR').attr('name', ' ');
			$('#fichaSinDiaR').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="4"){;
			$("#fichaAproxVR").hide();
			$("#fichaSinDiaVR").hide();
			$("#fichaExactaVR").hide();
			$("#fichaSinDiaSinMesVR").show("slow");
			$('#fichaExactaR').attr('name', ' ');
			$('#fichaAproxR').attr('name', ' ');
			$('#fichaSinDiaR').attr('name', '');
			$('#fichaSinDiaSinMesR').attr('name', 'casos_fechaInicial');
		  }
	  
	  }
     

     
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
			$('#fechaAprox').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fechaAproxV").hide();
			$("#fechaSinDiaSinMesV").hide();
			$("#fechaExactaV").hide();
			$("#fechaSinDiaV").show("slow");
			$('#fechaSinDiaSinMes').attr('name', ' ');
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
			$('#fechaAprox2').attr('name', 'casos_fechaInicial');
		  }
		  else if (a=="3"){
			$("#fechaAproxV2").hide();
			$("#fechaSinDiaSinMesV2").hide();
			$("#fechaExactaV2").hide();
			$("#fechaSinDiaV2").show("slow");
			$('#fechaSinDiaSinMes2').attr('name', ' ');
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
			$('#fechaAproxVAct').attr('name', 'nucleCaso_fechaInicio');
		  }
		  else if (a=="3"){
			$("#fechaAproxVAct").hide();
			$("#fechaSinDiaSinMesVAct").hide();
			$("#fechaExactaVAct").hide();
			$("#fechaSinDiaVAct").show("slow");
			$('#fechaSinDiaSinMesVAct').attr('name', ' ');
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
			$('#fechaAproxAct2').attr('name', 'casos_fechaTermino');
		  }
		  else if (a=="3"){
			$("#fechaAproxVAct2").hide();
			$("#fechaSinDiaSinMesVAct2").hide();
			$("#fechaExactaVAct2").hide();
			$("#fechaSinDiaVAct2").show("slow");
			$('#fechaSinDiaSinMesAct2').attr('name', ' ');
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





/*//Funciones colapsibles//*/
/*************************************************************/
function  nombrederechoAfectado(descripcion, valor){
	var algo="#"+valor+"DAN1";
	$('#textoDerechoAfectado').html(descripcion); 
	$('#textoDerechoAfectado').attr('name', ' ');
	$('#textoDerechoAfectado').attr('value', valor); 
	$(algo).toggleClass("Escondido");
	};

function nombrederechoAfectadosub1(descripcion2, valor){
	var nombre="#"+valor+"DAN2";
	$('#textoDerechoAfectado').html(descripcion2); 
	$('#textoDerechoAfectado').attr('name', ' ');
	$('#textoDerechoAfectado').attr('value', valor);
	$(nombre).toggleClass("Escondido");
	};
	

function nombrederechoAfectadosub2(descripcion3, valor){
	var nombre="#"+valor+"DAN3";
	$('#textoDerechoAfectado').html(descripcion3); 
	$('#textoDerechoAfectado').attr('name', ' ');
	$('#textoDerechoAfectado').attr('value', valor);
	$(nombre).toggleClass("Escondido");
	};


function nombrederechoAfectadosub3(descripcion4, valor){
	$('#textoDerechoAfectado').html(descripcion4); 
	$('#textoDerechoAfectado').attr('name', ' ');
	$('#textoDerechoAfectado').attr('value', valor);
	};


	


/*//Funciones colapsibles//*/
/*************************************************************/
function  nombreacto(descripcion, valor){
	var algo="#"+valor+"act1";
	$('#textoDerechoAfectadoN2').html(descripcion); 
	$('#textoDerechoAfectadoN2').attr('name', ' ');
	$('#textoDerechoAfectadoN2').attr('value', valor); 
	$(algo).toggleClass("Escondido");
	};

function nombreactosub2(descripcion2, valor){
	var nombre="#"+valor+"act2";
	$('#textoDerechoAfectadoN2').html(descripcion2); 
	$('#textoDerechoAfectadoN2').attr('name', ' ');
	$('#textoDerechoAfectadoN2').attr('value', valor);
	$(nombre).toggleClass("Escondido");
	};
	

function nombrederechoactosub3(descripcion3, valor){
	var nombre="#"+valor+"act3";
	$('#textoDerechoAfectadoN2').html(descripcion3); 
	$('#textoDerechoAfectadoN2').attr('name', ' ');
	$('#textoDerechoAfectadoN2').attr('value', valor);
	$(nombre).toggleClass("Escondido");
	};


function nombreactosub3(descripcion4, valor){
	$('#textoDerechoAfectadoN2').html(descripcion4); 
	$('#textoDerechoAfectadoN2').attr('name', ' ');
	$('#textoDerechoAfectadoN2').attr('value', valor);
	};


function detallesDelLugar(){ 
    $("#detallesLugar").toggle("slow");
    };

/************************Prueba de comunicación Ajax***********************/

function mostarDatosListaElem(id, tipoActorId) {
    
    var uri = base_url+"index.php/actores_c/cTraerDatosActor/"+id+"/"+tipoActorId;
    $('.borrar_select').css('background-color', '#fff');
    $('#elemento_'+id).css('background-color', '#D21400');
    if(tipoActorId == 3){
        var tipoActor = '_colectivo';   
        $("#formCargCol").show("slow");
		$("#formCol").hide("slow");
    }
    if(tipoActorId == 2){
        var tipoActor = '_transmigrante';
		$("#formCargTrans").show("slow");
		$("#formTrans").hide("slow");
    }
    if(tipoActorId == 1){
        var tipoActor = '';
        $("#formCargInd").show("slow");
		$("#formInd").hide("slow");
    }
    $.ajax({
            url: uri,
            method: 'post',
            datatype: "html",
            success: function(data){
                var json = jQuery.parseJSON(data);
                $.each(json, function(indice, valor){
                    $.each(valor, function(nombre, dato){
                        $('#'+nombre+tipoActor).html(dato);
                    });
                    /*
                    $('#actores_apellidosSiglasV').html(valor.apellidosSiglas);
                    $('#alias_aliasV').html(valor.alias);
                    $('#infoGralActor_generoidV').html(valor.generoId);
                    $('#infoGralActor_edadV').html(valor.edad);
                    $('#infoGralActor_estadoCivil_estadoCivilV').html(valor.estadoCivil_estadoCivilId);
                    $('#infoGralActor_nacionalidadV').html(valor.nacionalidadId);
                    */
                });
                
                
                //$('#formCargInd').html(data);
            }
        });
   
};
/*
function mostarDatosListaElem() {
	var datosActor=new Array("Siwon","Choi","Horse","hombre");
    $("#formInd").hide("slow");
    $("#formCargInd").show("slow");
	$('#actores_nombreV').html(datosActor[0]); 
	$('#actores_apellidosSiglasV').html(datosActor[1]); 
	$('#alias_aliasV').html(datosActor[2]); 
	$('ul').html(datosActor[3]); 
    };
*/
/******************Ventanas*************************/


function ventanaDetalleLugar(){
	  var windowSizeArray = [ "width=800,height=200" ];
	window.open('casosInicia_c', 'Detalles Lugar', windowSizeArray);
	};

function ventanaFicha(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('casosInicia_c/SeguimientoCaso', 'Seguimiento del caso', windowSizeArray);
	};


function ventanaDerAfectados(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('casosNucleo_c', 'Derechos Afectados', windowSizeArray);
	};



function ventanaInterevenciones(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('casosNucleo_c/intervenciones', 'Intervenciones', windowSizeArray);
	};


function ventanaFuenteDoc(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('infoAdicional_c', 'Fuente documental', windowSizeArray);
	};

function mostrarTexto(elem){
	var nombre = $(elem).attr('id');
	nombre = nombre.substring(8);  //Obteng el nombre limpio
	texto= "especial_" + nombre;	//Nombre del campo texto
	nombre2= "TextoEspecial_"+nombre; //Nombre del campo donde se encuentra el texto
	select = nombre+"Select";		//Nombre del campo select para esconder las opciones
    $("#"+ nombre).removeAttr("name");	//Quito el atribulo name
    $("#"+ select).hide("slow");	//Escondo las opciones
	$("#"+ nombre2).show("slow");	//Muestro el campo donde se ingresará el nuevo dato
    $("#"+ nombre2).html('<span><input type="text"  name='+ texto +' id='+ texto +' /> '+ 	//agrego el atributo value al texto
    '<input id="Botonmenos'+nombre+'" type="button" class="tiny button"  value="-" onclick="mostrarSelect(this)" /> </span>');
    alert(nombre+"  "+nombre2+"  "+select);
};


function mostrarSelect(elem){
	var nombre = $(elem).attr('id');
	nombre = nombre.substring(10);
	texto= "especial_" + nombre;	//Nombre del campo texto
	select = nombre+"Select";		//Nombre del campo select para esconder las opciones
	nombre2= "TextoEspecial_"+nombre; //Nombre del campo donde se encuentra el texto
    $("#"+ texto).removeAttr("name");	//Quito el atribulo value
    $("#"+ nombre2).hide("slow");	//Escondo las opciones
    $("#"+ select).show("slow");	//Escondo las opciones
    $("#"+nombre).attr('name',nombre);
};

function mostrarTexto2(elem){
	var nombre = $(elem).attr('id');
	nombre = nombre.substring(8);  //Obteng el nombre limpio
	name= nombre.substring(1);
	alert(name);
	name= "especial_"+ name;
	texto= "especial_" + nombre;	//Nombre del campo texto
	nombre2= "textoEspecial_"+nombre; //Nombre del campo donde se encuentra el texto
	select = nombre+"Select";		//Nombre del campo select para esconder las opciones
    $("#"+ nombre).removeAttr("name");	//Quito el atribulo name
    $("#"+ select).hide("slow");	//Escondo las opciones
	$("#"+ nombre2).show("slow");	//Muestro el campo donde se ingresará el nuevo dato
    $("#"+ nombre2).html('<span><input type="text"  name="TextoEspecial_'+ name +'" id='+ texto +' /> '+ 	//agrego el atributo value al texto
    '<input id="Botonmenos'+nombre+'" type="button" class="tiny button"  value="-" onclick="mostrarSelect2(this)" /> </span>');
};


function mostrarSelect2(elem){
	var nombre = $(elem).attr('id');
	nombre = nombre.substring(10);
	name= nombre.substring(1);
	texto= "especial_" + nombre;	//Nombre del campo texto
	select = nombre+"Select";		//Nombre del campo select para esconder las opciones
	nombre2= "textoEspecial_"+nombre; //Nombre del campo donde se encuentra el texto
    $("#"+ texto).removeAttr("name");	//Quito el atribulo value
    $("#"+ nombre2).hide("slow");	//Escondo las opciones
    $("#"+ select).show("slow");	//Escondo las opciones
    $("#"+nombre).attr('name',name);
};


function mostrarColectivo(){
    $("#formCargCol").show("slow");
    $("#formCol").hide("slow");	
};
	

function mostrarIndividual(){
    $("#formCargInd").show("slow");
    $("#formInd").hide("slow");	
};


function mostrarTransmigrante(){
    $("#formCargTrans").show("slow");
    $("#formTrans").hide("slow");	
};

