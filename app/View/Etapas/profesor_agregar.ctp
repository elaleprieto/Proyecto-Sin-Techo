<?php //debug($clase) ?>
<?php echo $this->Html->css(array('etapas/profesor_agregar'), null, array('inline'=>false)) ?>
<?php echo $this->Html->script(array('etapas/profesor_agregar', 'vendor/nicEdit'), array('inline'=>false)) ?>

<div class="row-fluid" ng-app="App" ng-controller="EtapaController" ng-init='clase=<?php echo json_encode($clase) ?>'>
	<div class="span12">
		<div class="mensaje row-fluid">
			<div class="span12">
				<span class="alert" id="mensaje"></span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<h1>Crear nueva etapa en <a ng-href="/profesor/clases/ver/{{clase.Clase.id}}" ng-bind="clase.Clase.name"></a></h1>
			</div>
		</div>
		<form name="etapaForm" ng-submit="submit()">
			<div class="row-fluid">
				<div class="span12">
					<label for="nombre">Nombre</label>
					<input name="nombre" ng-model="etapa.Etapa.name" placeholder="Ingrese el nombre de la etapa" required="required" type="text" />
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label for="descripcion">Descripción</label>
					<textarea name="descripcion" ng-model="etapa.Etapa.description" required="required"></textarea>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label for="categoria">Categoría</label>
					<select ng-model="etapa.Etapa.categoriaetapa_id" ng-options="categoria.id as categoria.nombre for categoria in categorias" required="required">
						<option value="">-- Seleccione una categoría --</option>
					</select>
						
				</div>
			</div>


			<div class="row-fluid" ng-show="etapa.Etapa.categoriaetapa_id == 1">
				<div class="span12">
					<label for="texto">Texto</label>
					<textarea class="span12" id="texto" name="texto"></textarea>
				</div>
			</div>
			<div class="row-fluid" ng-show="etapa.Etapa.categoriaetapa_id == 2">
				<div class="span12">
					<label for="video">Video</label>
					<input name="video" type="file" />
				</div>
			</div>
			<div class="row-fluid" ng-show="etapa.Etapa.categoriaetapa_id == 3">
				<div class="span12">
					<label for="ejercicio">Ejercicio</label>
					<textarea id="ejercicio"></textarea>
				</div>
			</div>
			
			
			
			
			
			
			
			<button class="btn" type="submit">Crear etapa</button>
		</form>
	</div>
</div>
