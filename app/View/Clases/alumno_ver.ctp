<?php //debug($clase)?>
<?php echo $this -> Html -> script(array('clases/alumno_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="ClaseController" ng-init='clase=<?php echo json_encode($clase) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<a ng-href="/alumno/cursos/ver/{{clase.Curso.id}}"><h2>Curso: <span ng-bind="clase.Curso.name"></span>!</h2></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Clase: <span ng-bind="clase.Clase.name"></span></h3>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="etapa in clase.Etapa">
		<div class="span3">
			<a ng-href="/alumno/etapas/ver/{{etapa.id}}"><h4><span ng-bind="etapa.name"></span></h4></a>
		</div>
		<div class="span3">
			<span ng-bind="etapa.description"></span>
		</div>
	</div>
	<div ng-view></div>
</div>
