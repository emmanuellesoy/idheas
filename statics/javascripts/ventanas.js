
/******************Ventanas Nuevo*************************/


function ventanaRelacionOtrosActores(idActor){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/index/'+idActor, 'Relacion entre individuales', windowSizeArray);
	};


function ventanaRelacionOtrosActoresCol(idActor){
	alert(idActor);
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/RelOtrosActores/index/'+idActor, 'Relaciones individuales Colectivo', windowSizeArray);
	};


function ventanaDetalleLugar(casoId){
	  var windowSizeArray = [ "width=800,height=200" ];
	window.open(base_url+'index.php/casosInicia_c/index/'+casoId, 'Detalles Lugar', windowSizeArray);
	};

function ventanaFicha(casoId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosInicia_c/SeguimientoCaso/'+casoId, 'Seguimiento del caso', windowSizeArray);
	};


function ventanaDerAfectados(casoId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosNucleo_c/index/'+casoId, 'Derechos Afectados/'+casoId, windowSizeArray);
	};



function ventanaInterevenciones(casoId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosNucleo_c/intervenciones/'+casoId, 'Intervenciones', windowSizeArray);
	};


function ventanaFuenteDoc(casoId){
	alert(casoId);
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosInfoAdicional_c/fuentesDeInformacion/'+casoId, 'Fuente documental', windowSizeArray);
	};


/******************Ventanas Editar*************************/

function ventanaRelacionOtrosActoresEditar(idActor, relacionActoresId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/index/'+idActor+'/'+relacionActoresId, 'Fuente documental', windowSizeArray);
	};


function ventanaRelacionOtrosActoresColEditar(idActor, relacionActoresId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/RelOtrosActores/'+idActor+'/'+relacionActoresId, 'Relaciones con otros actores', windowSizeArray);
	};


function cerrarVentana(){
	window.close();
};

