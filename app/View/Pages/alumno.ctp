<?
# CSS
echo $this -> Html -> css(array('jplayer.blue.monday', 'inicio', 'base'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('jwplayer', 'inicio'), array('inline' => FALSE));
?>
<div class="row">
	<div class="span6">
		<div id='player'>
			Necesita JavaScript activado para acceder a los archivos multimedia de este sitio.
		</div>
	</div>
	<div class="span6">
		<div class="page-header">
			<h2>Bienvenido <small>Movimiento Los Sin Techo</small></h2>
		</div>
		<p>
			El Movimiento Los Sin Techo es una organización no gubernamental que trabaja para el desarrollo integral y la organización comunitaria del sector marginado de la ciudad de Santa Fe, Argentina. Desde 1985 ha desarrollado distintas iniciativas tendientes a encontrar respuestas a los problemas estructurales de los más pobres.
		</p>
		<p>
			Esperamos que lo disfrutes.
		</p>
	</div>
</div>
<br />
<div class="row">
	<div class="span12 borde-grey">
		<div class="row">
			<div class="span5 centrado cursos">
				<?= $this -> Html -> image('http://lorempixel.com/450/200/business/4'); ?>
			</div>
			<div class="span6">
				<h1>Mis Cursos</h1>
			    <ul class="unstyled">
			    	<li><a href="curso"><i class="icon-thumbs-up"></i> Ortografía</a></li>
			    	<li><a><i class="icon-thumbs-up"></i> Historia de Santa Fe</a></li>
			    </ul>
			</div>
		</div>
	    <br />
		<p><button class="btn btn-primary btn-block">¡Inscribite a un Curso!<!-- <b class="icon-chevron-right icon-white"></b> --></button></p>
	</div>
</div>
		
<div class="row">
	<div class="span6">
		<h1>Noticias</h1>
	    <div id="noticiasCarousel" class="carousel slide">
		    <ol class="carousel-indicators">
			    <li data-target="#noticiasCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#noticiasCarousel" data-slide-to="1"></li>
			    <li data-target="#noticiasCarousel" data-slide-to="2"></li>
		    </ol>
		    <!-- Carousel items -->
		    <div class="carousel-inner">
			    <div class="active item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Noticia 1</h4>
			    	</div>
		    	</div>
			    <div class="item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Noticia 2</h4>
			    	</div>
		    	</div>
			    <div class="item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Noticia 3</h4>
			    	</div>
		    	</div>
		    </div>
		    <!-- Carousel nav -->
		    <a class="carousel-control left" href="#noticiasCarousel" data-slide="prev">&lsaquo;</a>
		    <a class="carousel-control right" href="#noticiasCarousel" data-slide="next">&rsaquo;</a>
	    </div>
	</div>
	<div class="span6">
		<h1>Testimonios</h1>
	    <div id="testimoniosCarousel" class="carousel slide">
		    <ol class="carousel-indicators">
			    <li data-target="#testimoniosCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#testimoniosCarousel" data-slide-to="1"></li>
			    <li data-target="#testimoniosCarousel" data-slide-to="2"></li>
		    </ol>
		    <!-- Carousel items -->
		    <div class="carousel-inner">
			    <div class="active item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Testimonio 1</h4>
			    	</div>
		    	</div>
			    <div class="item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Testimonio 2</h4>
			    	</div>
		    	</div>
			    <div class="item">
			    	<?= $this -> Html -> image('http://lorempixel.com/570/200/abstract?' . time()); ?>
			    	<div class="carousel-caption">
			    		<h4>Testimonio 3</h4>
			    	</div>
		    	</div>
		    </div>
		    <!-- Carousel nav -->
		    <a class="carousel-control left" href="#testimoniosCarousel" data-slide="prev">&lsaquo;</a>
		    <a class="carousel-control right" href="#testimoniosCarousel" data-slide="next">&rsaquo;</a>
	    </div>
	</div>
</div>