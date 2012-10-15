<?
# CSS
echo $this -> Html -> css(array('jplayer.blue.monday','inicio'));

# JavaScript
echo $this -> Html -> script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js', 'jquery.jplayer.min.js', 'inicio.js'));
?>
<div id="jquery_jplayer_1"></div>
<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play" tabindex="1" style="display: block; ">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1" style="display: none; ">pause</a></li>
								<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute" style="display: none; ">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value" style="width: 80%; "></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen" style="display: none; ">restore screen</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none; ">repeat off</a></li>
							</ul>
						</div>

<div class="imagen"><?= $this -> Html -> image('sky2.png'); ?></div>
<div class="texto">
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