<html>
	<head>
		
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width" />

		<title>i(dh)eas</title>
		
		  <!-- Estilo de la página CSS-->
		<?php $link = array(
			'href' => 'statics/foundationCSS/stylesheets/foundation.min.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
		
		<?php $link = array(
			'href' => 'statics/foundationCSS/stylesheets/app.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
			);
			echo link_tag($link); 
		?>
		  
		  <title>I(DH)EAS</title>
		  
		  
		  <script src="javascripts/modernizr.foundation.js"></script>

	</head>
	
	<body>
			<div class="row">
  <div class="two columns push-ten">
    .two.columns		
  </div>
  <div class="ten columns pull-two">
    .ten.columns (last)				
  </div>
</div>

<div class="row">
  <div class="seven columns push-five">
    .seven.columns				
  </div>
  <div class="five columns pull-seven">
    .five.columns (last)			
  </div>
</div>
	</body>

</html>
