<?php //debug($curso)?>

<?php echo $this -> Html -> script(array('cursos/alumno_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="CursoController" ng-init='curso=<?php echo json_encode($curso) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<h2>¡Bienvenido a <span ng-bind="curso.Curso.name"></span>!</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Docente: <span ng-bind="curso.Profesor.User.name"></span></h3>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="clase in curso.Clase">
		<div class="span3">
			<a ng-href="/alumno/clases/ver/{{clase.id}}"><h4><span ng-bind="clase.name"></span></h4></a>
		</div>
		<div class="span3">
			<span ng-bind="clase.description"></span>
		</div>
	</div>
	<div ng-view></div>
</div>
