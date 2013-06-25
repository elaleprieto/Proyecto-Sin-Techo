<?php debug($profesor) ?>
<?php echo $this -> Html -> script(array('users/profesor_index'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="ProfesorController" ng-init='profesor=<?php echo json_encode($profesor) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<h2>¡Bienvenido Profesor!</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Cursos</h3>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="curso in profesor.Curso">
		<div class="span12">
			{{curso.name}}
		</div>
	</div>
	<div ng-view></div>
</div>
