<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>Login Ideas</title>
		<?php $link = array(
			'href' => 'statics/CSS/login.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
	</head>

	<body>
				

<form action="index.php/form_c" method="post" accept-charset="utf-8">
		<div id="container" name="container">
			<div id="encabezado" name="encabezado">	
						
				<div id="bienvenido" name="bienvenido">
					<h1>Bienvenido</h1>
				</div>
				
				<div id="logo">
					<?php echo img('IMG/logo.png');?>
				</div>
				
			</div> <!--Termina encabezado de la página-->
			
			<div id="texto">
				<?php echo br(1);?>
			</div>
			
			<div id="formulario" name="formulario">
				
					<div id="contenidoLogin">
					<H2>Usuario</H2>
					<input id="usuario" type="text" name="usuario"  required pattern="Admin"/>
					<?php echo br(2);?>
					<H2>Contraseña</H2>
					<input id="contrasenia" type="password" name="contrasenia" required />
					<p class="submit">  
					<?php echo br(1);?>
					<input type="submit" value="Aceptar" />  
					</div>
					</p>
				</form>
				
			</div>		
			
		</div><!--Termina el contenido de la página-->

	</body>
</html>


