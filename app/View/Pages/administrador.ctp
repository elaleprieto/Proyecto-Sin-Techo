<?
# CSS
echo $this -> Html -> css(array('jplayer.blue.monday', 'inicio'), null, array('inline' => FALSE));

# JavaScript
echo $this -> Html -> script(array('jwplayer', 'inicio'), array('inline' => FALSE));
?>
<br />
<ul class="thumbnails">
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/abstract?' . time()); ?>
			<h3>Alumnos</h3>
			<p>
				Nullam id lorem sed dolor ultrices feugiat. Morbi lacinia diam sit amet velit pellentesque posuere. Sed tempus, purus a malesuada dignissim, tortor lacus malesuada mauris, nec hendrerit nunc diam at enim. Nunc vitae enim justo, eu accumsan arcu. Fusce blandit placerat vehicula. Nam vitae magna quam. Duis massa magna, porttitor nec scelerisque ut, faucibus non elit. Vivamus at augue sit amet sapien mattis ultrices. Praesent varius erat vel libero scelerisque. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo <b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/nightlife?' . time()); ?>
			<h3>Cursos</h3>
			<p>
				In cursus elit aliquet justo fringilla rutrum porta tortor molestie. Integer convallis tincidunt mi quis elementum. Cras pretium, neque non eleifend bibendum, erat dolor rhoncus dui, id suscipit nisi lectus vel nisi. Praesent quis justo arcu. Morbi vel nibh mauris, sed rutrum est. Phasellus cursus, quam a consectetur scelerisque, metus nulla malesuada est, a viverra purus ipsum quis lorem. Quisque eu justo non ante hendrerit condimentum. Donec nibh odio, rhoncus. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo<b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
	<li class="span4">
		<div class="thumbnail">
			<?= $this -> Html -> image('http://lorempixel.com/450/200/technics?' . time()); ?>
			<h3>Docentes</h3>
			<p>
				Fusce blandit sollicitudin tempus. In hac habitasse platea dictumst. Sed a mauris magna. Cras consequat, ligula nec eleifend rutrum, nunc nibh pharetra sapien, quis sodales velit tortor vitae elit. Suspendisse suscipit suscipit est, at suscipit tellus bibendum tempus. Aenean eget nisl vel massa feugiat consequat. Nam semper purus purus, a mattis quam. Ut tempor lacinia massa id rhoncus. Vivamus consectetur consequat ipsum id consectetur. Mauris posuere pretium urna. Nulla a. 
			</p>
			<p><button class="btn btn-primary btn-block">Seguir leyendo<b class="icon-chevron-right icon-white"></b></button></p>
		</div>
	</li>
</ul>