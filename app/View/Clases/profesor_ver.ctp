<?php //debug($clase)?>
<?php echo $this->Html->css(array('clases/profesor_ver'), null, array('inline'=>false)) ?>
<?php echo $this->Html->script(array('clases/profesor_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="ClaseController" ng-init='clase=<?php echo json_encode($clase, JSON_NUMERIC_CHECK) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<a ng-href="/profesor/cursos/ver/{{clase.Curso.id}}"><h2>Curso: <span ng-bind="clase.Curso.name"></span>!</h2></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Clase: <span ng-bind="clase.Clase.name"></span></h3>
		</div>
		<div class="span6">
			<a class="btn" ng-href="/profesor/etapas/agregar/{{clase.Clase.id}}">Crear Etapa</a>
		</div>
	</div>
	<div class="row-fluid" ng-repeat="etapa in clase.Etapa | orderBy:'order'">
		<div class="span3">
			<a ng-href="/profesor/etapas/ver/{{etapa.id}}"><h4><span ng-bind="etapa.name"></span></h4></a>
		</div>
		<div class="span3">
			<span ng-bind="etapa.description"></span>
		</div>
		<div class="span3">
			<i class="icon-chevron-up puntero" ng-click="orderUp($event, etapa)"></i>
			<br />
			<label class="label" ng-bind="etapa.order"></label>
			<br />
			<i class="icon-chevron-down puntero" ng-click="orderDown($event, etapa)"></i>
		</div>
		<div class="span3">
			<a ng-href="/profesor/etapas/editar/{{clase.id}}"><i class="icon-edit"></i></a>
			<a ng-href="/profesor/etapas/borrar/{{clase.id}}"><i class="icon-remove"></i></a>
		</div>
	</div>
	<div ng-view></div>
</div>
