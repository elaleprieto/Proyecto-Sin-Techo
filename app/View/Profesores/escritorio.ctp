<?php //debug($profesor) ?>
<?php echo $this -> Html -> script(array('profesores/escritorio'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="ProfesorController" ng-init='profesor=<?php echo json_encode($profesor) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<h2>¡Bienvenido <span ng-bind="profesor.User.name"></span>!</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Cursos</h3>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="curso in profesor.Curso">
		<div class="span12">
			<a ng-href="/profesor/cursos/ver/{{curso.id}}"><h4><span ng-bind="curso.name"></span> <small><span ng-bind="curso.Alumno.length"></span></small></h4></a>
		</div>
	</div>
	<div ng-view></div>
</div>
