<html >
	<head>
		<meta charset="utf-8">
		<title>i(dh)eas</title>
		<?php $link = array(
			'href' => 'statics/CSS/menu.css',
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
				
<div class="tabs">
    
    <div class="tab">
        <input type="radio" id="tab-1" name="tab-group-1" checked>
        <label for="tab-1">Tab 1</label>
        
        <div class="content">
			
			<div id="listadeAct" class="left">
		
				<?php echo $listaActores;?><!---Se llama a listaActores--->
			
			</div>		
		<div id="derecho" class="right">
			
								<?php echo $individual;?>
				
			</div>
        </div> 
    </div>

    
    <div class="tab">
        <input type="radio" id="tab-2" name="tab-group-1">
        <label for="tab-2">Tab 2</label>
        
        <div class="content">
						<?php echo $transmigrante;?>					

        </div> 
    </div>
    
    <div class="tab">
        <input type="radio" id="tab-3" name="tab-group-1">
        <label for="tab-3">Tab 3</label>
        
        <div class="content">
							<?php echo $colectivo;?>
        </div> 
    </div>
    
</div>​




<!----------------------------->
		</div>

</div><!--termina el container-->

</body>
</html>


