<?
# CSS
echo $this -> Html -> css(array('jplayer.blue.monday', 'inicio'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('jwplayer', 'inicio'), array('inline' => FALSE));
?>
<div class="row">
	<div class="span6">
		<div id='player'>
			Necesita JavaScript activado para acceder a los archivos multimedia de este sitio.
		</div>
	</div>
	<div class="span6">
		<div class="page-header">
			<h2>Proyecto Sin Techo <small>Proyecto Final de Carrera</small></h2>
		</div>
		<p>
			Bienvenido al Proyecto Sin Techo, una iniciativa nacida de los estudiantes de Ingeniería en Sistemas de Información: María Celeste Weidmann y Alejandro Esteban Prieto.
		</p>
		<p>
			La idea surgió mientras participaban del Laboratorio de Conectividad en la Universidad Tecnológica Nacional - Facultad Regional Santa Fe y fue sugerido como Proyecto Final de Carrera.
		</p>
		<p>
			Esperamos que lo disfrutes.
		</p>
	</div>
</div>
<br />
<ul class="thumbnails">
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/abstract?' . time()); ?>
			<h3>Noticias</h3>
			<p>
				Nullam id lorem sed dolor ultrices feugiat. Morbi lacinia diam sit amet velit pellentesque posuere. Sed tempus, purus a malesuada dignissim, tortor lacus malesuada mauris, nec hendrerit nunc diam at enim. Nunc vitae enim justo, eu accumsan arcu. Fusce blandit placerat vehicula. Nam vitae magna quam. Duis massa magna, porttitor nec scelerisque ut, faucibus non elit. Vivamus at augue sit amet sapien mattis ultrices. Praesent varius erat vel libero scelerisque. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo <b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/nightlife?' . time()); ?>
			<h3>Eventos</h3>
			<p>
				In cursus elit aliquet justo fringilla rutrum porta tortor molestie. Integer convallis tincidunt mi quis elementum. Cras pretium, neque non eleifend bibendum, erat dolor rhoncus dui, id suscipit nisi lectus vel nisi. Praesent quis justo arcu. Morbi vel nibh mauris, sed rutrum est. Phasellus cursus, quam a consectetur scelerisque, metus nulla malesuada est, a viverra purus ipsum quis lorem. Quisque eu justo non ante hendrerit condimentum. Donec nibh odio, rhoncus. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo<b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/technics?' . time()); ?>
			<h3>Thumbnail label</h3>
			<p>
				Fusce blandit sollicitudin tempus. In hac habitasse platea dictumst. Sed a mauris magna. Cras consequat, ligula nec eleifend rutrum, nunc nibh pharetra sapien, quis sodales velit tortor vitae elit. Suspendisse suscipit suscipit est, at suscipit tellus bibendum tempus. Aenean eget nisl vel massa feugiat consequat. Nam semper purus purus, a mattis quam. Ut tempor lacinia massa id rhoncus. Vivamus consectetur consequat ipsum id consectetur. Mauris posuere pretium urna. Nulla a. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo<b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
</ul>