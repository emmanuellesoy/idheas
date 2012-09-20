
/******************Ventanas Nuevo*************************/


function ventanaRelacionOtrosActores(idActor){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/index/'+idActor, 'Fuente documental', windowSizeArray);
	};


function ventanaRelacionOtrosActoresCol(idActor){
	alert(idActor);
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open('relacionesEntreActores_c/RelOtrosActores/index/'+idActor, 'Relaciones con otros actores', windowSizeArray);
	};


function ventanaDetalleLugar(){
	  var windowSizeArray = [ "width=800,height=200" ];
	window.open(base_url+'index.php/casosInicia_c', 'Detalles Lugar', windowSizeArray);
	};

function ventanaFicha(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosInicia_c/SeguimientoCaso', 'Seguimiento del caso', windowSizeArray);
	};


function ventanaDerAfectados(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosNucleo_c', 'Derechos Afectados', windowSizeArray);
	};



function ventanaInterevenciones(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/casosNucleo_c/intervenciones', 'Intervenciones', windowSizeArray);
	};


function ventanaFuenteDoc(){
	  var windowSizeArray = [ "width=650,height=700,scrollbars=yes" ];
	window.open(base_url+'index.php/infoAdicional_c', 'Fuente documental', windowSizeArray);
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


function editarOpciones(){
	var contenido= $('#observacionesCasos').html();
	alert(contenido);
}