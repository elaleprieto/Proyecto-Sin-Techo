<?
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
		<h1>Proyecto Sin Techo</h1>
		<hr />
		<form class="form-horizontal" action="inicio">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Usuario</label>
				<div class="controls">
					<input type="text" id="inputEmail" placeholder="Usuario">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contraseña</label>
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="Contraseña">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox">
						Recordarme </label>
					<button type="submit" class="btn btn-primary">
						Ingresar
					</button>
					<button type="reset" class="btn">
						Borrar
					</button>
					<button type="button" class="btn">
						Registrarme
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br />
