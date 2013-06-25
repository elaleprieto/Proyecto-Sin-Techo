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
		<title> Proyecto Sin Techo:
			<?php echo $title_for_layout; ?> </title>
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
		echo $this -> Html -> css(array('bootstrap', 'bootstrap-responsive', 'main', 'default', 'layout/profesor'));
		echo $this -> fetch('css');
		# Modernizr
		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<!-- <a class="brand" href="#">Trama Tierra</a> -->
					<?=$this -> Html -> image('nube.png', array('class' => 'brand logo')); ?>
					<?=$this -> Html -> link('Proyecto Sin Techo', '/', array('class' => 'brand')) ?>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'inicio') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Inicio', '/') ?>
							</li>
							<li>
								<a href="/acercade">Acerca de</a>
							</li>
							<li>
								<a href="#contact">Contacto</a>
							</li>
							<!-- 			Menú Más				 -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Más <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?=$this -> Html -> link('Publicar Material', '#') ?>
									</li>
									<li>
										<?=$this -> Html -> link('Crear Noticia', '#') ?>
									</li>
									<li>
										<?=$this -> Html -> link('Crear Evento', '#') ?>
									</li>
									<li class="divider"></li>
									<li>
										<?=$this -> Html -> link('Gestión del Curso', '#') ?>
									</li>
									<li>
										<?=$this -> Html -> link('Gestión de Alumnos', '#') ?>
									</li>
								</ul>
							</li><!-- 			Fin Menú Más				 -->
						</ul>
						<p class="navbar-text pull-right">
							<span id="usernameNav"><?php echo $this->Session->read('Auth.User.name') ?></span>
							<span id="logoutNav"><?php echo $this->Html->link('Salir', '/users/logout', array('class'=>'btn btn-inverse')) ?></span>
						</p>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<?php echo $this -> Session -> flash(); ?>
			<?php echo $this -> fetch('content'); ?>
			<?php echo $this->element('layouts/footer') ?>
		</div>

		<?php echo $this -> element('sql_dump'); ?>

		<?php echo $this -> element('layouts/scripts'); ?>
		
	</body>
</html>
