<?
# CSS
echo $this -> Html -> css(array('base', 'inicio', 'curso'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('inicio'), array('inline' => FALSE));
?>
<ul class="breadcrumb">
    <li><a href="alumno ">Inicio</a> <span class="divider">/</span></li>
    <li><a href="#">Cursos</a> <span class="divider">/</span></li>
    <li class="active">Ortografía</li>
</ul>
<div class="row">
	<div class="span12">
		<div class="hero-unit">
			<h1>Bienvenido a Ortografía</h1>
			<h2>Descripción del Curso</h2>
			<p>
				<small>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros mauris, laoreet id convallis ac, laoreet in enim. Cras eget justo lorem. Nunc vel lorem dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec mattis eros ac magna fermentum vitae pretium ante sollicitudin. Sed volutpat euismod enim eu pharetra. Suspendisse potenti. Suspendisse potenti. Suspendisse potenti. Curabitur non sem non nisi laoreet malesuada. Sed mi nibh, porttitor accumsan dignissim id, gravida non lacus. Duis nibh risus, varius eget vehicula ut, mollis sed quam. Nullam erat nibh, bibendum suscipit luctus sit amet, cursus eu augue. Vivamus nibh arcu, commodo ut consequat non, vestibulum in ante. Aenean sed risus vitae justo sodales tempus sit amet vitae sapien.
				</small>
			</p>
			<h2>Profesor: José Luis Albornoz</h2>
			<h2>Duración: 2 meses</h2>
		</div>
	</div>
</div>
<br />
<div class="alert alert-error">
    <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
    <a href="#"><strong>¡En Vivo!</strong> Mirá la clase en vivo...</a>
</div>
<br />
<div class="row">
	<div class="span12">
		<h1>Guía de Clases</h1>
		<table class="table table-striped">
			<tbody>
				<tr>
					<td><a href="clase"> Clase 2: Reglas Gramaticales</a></td>
				</tr>
				<tr>
					<td><a href="clase">Clase 1: Introducción a la Ortografía</a></td>
				</tr>
			</tbody>
			
		</table>
	</div>
</div>