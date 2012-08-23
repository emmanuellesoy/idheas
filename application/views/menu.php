<html >
	<head>
		<meta charset="utf-8">
		<title>i(dh)eas</title>
		<?php $link = array(
			'href' => 'CSS/menu.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
	</head>


<body>
	
<div id="Encabezado" class="header">
	
</div><!--Termina el encabezado con el logo-->

<div class="container">
			
		<div id="izquierdo" class="left">
			<div id="menu" >
				<ul class="rounded-list">
					<li><a href="">List item</a></li>
					<li><a href="">List item</a></li>
					<li><a href="">List item</a></li>
				</ul>
			
			</div>
		</div>

		
		<div id="derecho" class="right">

			<div id="listadeAct" class="left">
		
				<?php echo $listaActores;?><!---Se llama a listaActores--->
			
			</div>		
			
			<div id="formulario" class="right">
				<?php echo $formulario;?>
				
			</div>

		</div>

</div><!--termina el container-->

</body>
</html>

