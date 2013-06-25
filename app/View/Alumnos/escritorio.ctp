<?php //debug($alumno) ?>
<?php echo $this -> Html -> script(array('alumnos/escritorio'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="AlumnoController" ng-init='alumno=<?php echo json_encode($alumno) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<h2>¡Bienvenido <span ng-bind="alumno.User.name"></span>!</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Cursos</h3>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="curso in alumno.Curso">
		<div class="span12">
			<a ng-href="/alumno/cursos/ver/{{curso.id}}"><h4><span ng-bind="curso.name"></span> <small><span ng-bind="curso.Alumno.length"></span></small></h4></a>
		</div>
	</div>
	<div ng-view></div>
</div>
