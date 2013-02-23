<?
# CSS
echo $this -> Html -> css(array('base', 'inicio', 'curso'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('jwplayer', 'clase'), array('inline' => FALSE));
?>
<ul class="breadcrumb">
    <li><a href="alumno ">Inicio</a> <span class="divider">/</span></li>
    <li><a href="curso">Cursos</a> <span class="divider">/</span></li>
    <li><a href="curso">Ortografía</a> <span class="divider">/</span></li>
    <li class="active">Clase 1</li>
</ul>
<div class="row">
	<div class="span12">
		<div class="hero-unit">
			<h1>Bienvenido a la Clase 1</h1>
			<h2>Curso Ortografía</h2>
		</div>
	</div>
</div>
<br />
<ul class="nav nav-tabs">
	<li class="active"><a href="#materiales" data-toggle="tab">Materiales</a></li>
	<li><a href="#video" data-toggle="tab">Video</a></li>
	<li><a href="#ejercicios" data-toggle="tab">Ejercicios</a></li>
	<li><a href="#examen" data-toggle="tab">Examen</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="materiales">
		<div class="alert alert-info">
		    <a href="#">Introducción</a>
		    <a href="#"><span class="label label-info pull-right">Bajar <i class="icon-download-alt icon-white"></i></span></a>
		</div>
		<div class="alert alert-info">
				<!-- <button type="button" class="close">Bajar <i class="icon-download-alt"></i></button> -->
		    <a href="#">Desenlace</a>
		    <a href="#"><span class="label label-info pull-right">Bajar <i class="icon-download-alt icon-white"></i></span></a>
		</div>
	</div>
	<div class="tab-pane" id="video">
		<div id='player'>
			Necesita JavaScript activado para acceder a los archivos multimedia de este sitio.
		</div>
	</div>
	<div class="tab-pane" id="ejercicios">
		<div class="alert alert-info">
		    <h2>Ejercicio 1</h2>
		    <h3>Elegir la respuesta correcta</h3>
		    <label class="radio">
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				Siempre la letra m antecede a la letra b
			</label>
			<label class="radio">
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				A veces la letra m antecede a la letra b y otras veces la letra n antecede a la letra b
			</label>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 2</h2>
		    <h3>Elegir la/s respuesta/s correcta/s</h3>
		   <label class="checkbox">
				<input type="checkbox" value="">
				La palabra camión es esdrújula.
			</label>
		   <label class="checkbox">
				<input type="checkbox" value="">
				La palabra sifón es grave.
			</label>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 3</h2>
		    <h3>Redactar</h3>
		    <textarea rows="3"></textarea>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 4</h2>
		    <h3>Subir un ejercicio</h3>
		    <input type="file" />
		</div>
		<div>
		    <button class="btn-primary btn-large">Enviar</button>
		</div>
	</div>
	<div class="tab-pane" id="examen">
		<div class="alert alert-info">
		    <h2>Ejercicio 1</h2>
		    <h3>Elegir la respuesta correcta</h3>
		    <label class="radio">
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				Siempre la letra m antecede a la letra b
			</label>
			<label class="radio">
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				A veces la letra m antecede a la letra b y otras veces la letra n antecede a la letra b
			</label>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 2</h2>
		    <h3>Elegir la/s respuesta/s correcta/s</h3>
		   <label class="checkbox">
				<input type="checkbox" value="">
				La palabra camión es esdrújula.
			</label>
		   <label class="checkbox">
				<input type="checkbox" value="">
				La palabra sifón es grave.
			</label>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 3</h2>
		    <h3>Redactar</h3>
		    <textarea rows="3"></textarea>
		</div>
		<div class="alert alert-info">
		    <h2>Ejercicio 4</h2>
		    <h3>Subir un ejercicio</h3>
		    <input type="file" />
		</div>
		<div>
		    <button class="btn-primary btn-large">Enviar</button>
		</div>
	</div>
</div>



