
	<?php 	require("config.php"); ?>
</!DOCTYPE html>


<html>
	
	<head>
		<title></title>	
		<meta charset="utf-8" />		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="index,follow">
		
		<link rel="stylesheet" href="body/estilo.css"/>
		<link rel="shortcut icon" href="../icon/tam.ico" />
		<script src="lib/jquery-3.3.1.min.js"></script> 
		<link rel="stylesheet" href="lib/jquery.toast.min.css">
		<script type="text/javascript" src="lib/jquery.toast.min.js"></script>
		<script type="text/javascript" src="lib/pdz_functions.js"></script>
		<script type="text/javascript" src='lib/pdz_sintetizadodevoz.js'></script>
		<script>
			function habla(quedigo){
				// alert(quedigo);
				// responsiveVoice.speak(quedigo); 
				responsiveVoice.speak(quedigo, 'Spanish Latin American Female', {volume: 100});
			}
				
		</script>
		<link href="lib/ui/jquery-ui.css" rel="stylesheet">
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
		  <script src="lib/ui/jquery-ui.js"></script>
		  
		
		
</head>

<body>