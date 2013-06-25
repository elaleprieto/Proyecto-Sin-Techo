<?php //debug($etapa)?>
<?php echo $this -> Html -> script(array('etapas/profesor_ver'), array('inline'=>false)) ?>

<div ng-app="App" ng-controller="EtapaController" ng-init='etapa=<?php echo json_encode($etapa) ?>'>
	<div class="row-fluid">
		<div class="span12">
			<a ng-href="/profesor/clases/ver/{{etapa.Clase.id}}"><h2>Clase: <span ng-bind="etapa.Clase.name"></span></h2></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Etapa: <span ng-bind="etapa.Etapa.name"></span></h3>
		</div>
		<div class="span6">
			<a class="btn" href="/profesor/etapas/editar/{{etapa.Etapa.id}}">Editar Etapa</a>
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
