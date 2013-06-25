<?php //debug($curso) ?>
<?php echo $this->Html->css(array('clases/profesor_agregar'), null, array('inline'=>false)) ?>
<?php echo $this->Html->script(array('clases/profesor_agregar'), array('inline'=>false)) ?>

<div class="row-fluid" ng-app="App" ng-controller="ClaseController" ng-init='curso=<?php echo json_encode($curso) ?>'>
	<div class="span12">
		<div class="mensaje row-fluid">
			<div class="span12">
				<span class="alert" id="mensaje"></span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<h1>Crear nueva clase en <a ng-href="/profesor/cursos/ver/{{curso.Curso.id}}" ng-bind="curso.Curso.name"></a></h1>
			</div>
		</div>
		<form name="claseForm" ng-submit="submit()">
			<div class="row-fluid">
				<div class="span12">
					<label for="nombre">Nombre</label>
					<input name="nombre" ng-model="clase.Clase.name" placeholder="Ingrese el nombre de la clase" required="required" type="text" />
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label for="descripcion">Descripción</label>
					<textarea name="descripcion" ng-model="clase.Clase.description" required="required"></textarea>
				</div>
			</div>
			<button class="btn" type="submit">Crear clase</button>
		</form>
	</div>
</div>
