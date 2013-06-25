<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> Proyecto Sin Techo </title>
		<meta name="description" content="Proyecto Final de la Carrera Ingeniería en Sistemas de Información. Alumnos: María Celeste Weidmann y Alejandro Esteban Prieto.">
		<meta name="viewport" content="width=device-width">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<?php
		echo $this -> Html -> meta('icon');
		echo $this -> fetch('meta');
		# Estilos
		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'main', 'default'));
		echo $this -> fetch('css');
		# Modernizr
		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>
	<body>
		<div class="container">
			<?php echo $this -> fetch('content'); ?>
		</div>
	</body>
</html>
