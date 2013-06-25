<?php //debug($curso)?>

<?php echo $this -> Html -> script(array('cursos/profesor_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="CursoController" ng-init='curso=<?php echo json_encode($curso) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<h2>¡Bienvenido <span ng-bind="curso.Profesor.User.name"></span>!</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Curso: <span ng-bind="curso.Curso.name"></span></h3>
		</div>
		<div class="span6">
			<a class="btn" href="/profesor/clases/agregar/{{curso.Curso.id}}">Crear Clase</a>
			<a class="btn" href="/alumnos/listar">Listar Alumnos</a>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="clase in curso.Clase">
		<div class="span3">
			<a ng-href="/profesor/clases/ver/{{clase.id}}"><h4><span ng-bind="clase.name"></span></h4></a>
		</div>
		<div class="span3">
			<span ng-bind="clase.description"></span>
		</div>
		<div class="span6">
			<a ng-href="/profesor/clases/editar/{{clase.id}}"><i class="icon-edit"></i></a>
			<a ng-href="/profesor/clases/borrar/{{clase.id}}"><i class="icon-remove"></i></a>
		</div>
	</div>
	<div ng-view></div>
</div>
