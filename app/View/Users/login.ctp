<!-- 
<div class="row-fluid">
	<div class="offset1 span10">
		<?php echo $this -> Session -> flash('auth'); ?>
	</div>
</div>
<?php echo $this -> Form -> create('User'); ?>
	<div class="row-fluid">
		<div class="offset1 span10">
			<fieldset>
				<legend>
					Sitio Web de la Comuna de Sauce Viejo
				</legend>
				<?php
				echo $this -> Form -> input('username', array('class'=>'span12', 'label' => 'Usuario'));
				echo $this -> Form -> input('password', array('class'=>'span12', 'label' => 'Contraseña'));
				?>
			</fieldset>
		</div>
	</div>
	<div class="row-fluid">
		<div class="offset1 span10 text-center">
			<? echo $this->Form->submit('Ingresar', array('class'=>'span4', 'label'=>FALSE, 'type'=>'submit')) ?>
		</div>
	</div>			
<?php echo $this -> Form -> end(); ?> -->












<?php
# CSS
echo $this -> Html -> css(array('login'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('login'), array('inline' => FALSE));
?>
<div class="row">
	<div class="span4">
		<?= $this -> Html -> image('banner2016.jpg', array('class' => 'pull-right login')) ?>
	</div>
	<div class="span8">
		<h1 class="bienvenido"><small>Bienvenido a</small></h1>
		<h1>Movimiento Los Sin Techo</h1>
		<hr />
		<!-- <form class="form-horizontal" action="cursos"> -->
		<?php echo $this->Form->create('User', array('class'=>'form-horizontal')) ?>
			<div class="control-group">
				<!-- <label class="control-label" for="inputEmail">Usuario</label>
				<div class="controls">
					<input type="text" id="inputEmail" placeholder="Usuario">
				</div> -->
				<?php //echo $this->Form->input('username', array('class'=>'span12', 'label' => 'Usuario')) ?>
				<?php
				echo $this->Form->label('username', 'Usuario', array('class'=>'control-label'));
				echo $this->Form->input('username', array('div'=>'controls', 'label'=>FALSE, 'placehorlder'=>'Usuario'))
				?>
			</div>
			<div class="control-group">
				
				<!-- <label class="control-label" for="inputPassword">Contraseña</label>
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="Contraseña">
				</div> -->
				<?php
				echo $this->Form->label('password', 'Contraseña', array('class'=>'control-label'));
				echo $this->Form->input('password', array('div'=>'controls', 'label'=>FALSE, 'placehorlder'=>'Contraseña'))
				?>
			</div>
			<div class="control-group">
				<div class="controls">
					<!-- <label class="checkbox">
						<input type="checkbox">
						Recordarme </label> -->
					<button type="submit" class="btn btn-primary">
						Entrar
					</button>
					<!-- <button type="reset" class="btn">
						Borrar
					</button>
					<button type="button" class="btn">
						Registrarme
					</button> -->
				</div>
			</div>
			<!-- <div class="control-group">
				<div class="controls">
					<a href="profesor" class="btn btn-mini">Profesor</a>
					<a href="administrador" class="btn btn-mini">Administrador</a>
				</div>
			</div> -->
		</form>
	</div>
</div>
<br />
