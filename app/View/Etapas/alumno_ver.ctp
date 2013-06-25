<?php echo $this -> Html -> script(array('etapas/alumno_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="EtapaController" ng-init='etapa=<?php echo json_encode($etapa, JSON_NUMERIC_CHECK) ?>'>
	<div class="row-fluid" ng-controller="PasoController" ng-init='pasos=<?php echo json_encode($pasos, JSON_NUMERIC_CHECK) ?>'>
		<div class="span12 text-center">
			<a ng-href="/alumno/etapas/ver/{{paso.Etapa.id}}" ng-repeat="paso in pasos">
				<span class="badge" ng-class="{'badge-success':paso.Etapa.order==etapa.Etapa.order, 'badge-info':paso.Etapa.order > etapa.Etapa.order}" ng-bind="$index+1"></span>
			</a>
		</div>
	</div>
	<div class="row-fluid"  ng-controller="NeighborsController" ng-init='neighbors=<?php echo json_encode($neighbors, JSON_NUMERIC_CHECK) ?>'>
		<div class="span6">
			<a class="btn btn-primary" ng-href="/alumno/etapas/ver/{{neighbors.prev.Etapa.id}}" ng-hide="neighbors.prev == null"><i class="icon-chevron-left icon-white"></i></a>
		</div>
		<div class="span6 text-right">
			<a class="btn btn-primary" ng-href="/alumno/etapas/ver/{{neighbors.next.Etapa.id}}" ng-hide="neighbors.next == null"><i class="icon-chevron-right icon-white"></i></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<a ng-href="/alumno/clases/ver/{{etapa.Clase.id}}"><h2>Clase: <span ng-bind="etapa.Clase.name"></span></h2></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Etapa: <span ng-bind="etapa.Etapa.name"></span></h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Descripción: <small><span ng-bind="etapa.Etapa.description"></span></small></h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Categoría: <small><span ng-bind="etapa.Categoriaetapa.name"></span></small></h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>Contenido</h3>
			<p ng-bind-html-unsafe="etapa.Etapa.contenido"></p>
		</div>
	</div>
</div>
