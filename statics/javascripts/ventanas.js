
/******************Ventanas Nuevo*************************/


function ventanaRelacionOtrosActores(idActor){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/index/'+idActor, 'Fuente documental', windowSizeArray);
	};


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


function ventanaRelacionOtrosActoresCol(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/RelOtrosActores', 'Relaciones con otros actores', windowSizeArray);
	};


/******************Ventanas Editar*************************/

function ventanaRelacionOtrosActoresEditar(idActor, relacionActoresId){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/index/'+idActor, 'Fuente documental', windowSizeArray);
	};

