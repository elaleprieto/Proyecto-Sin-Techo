<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$appDescription = __d('app_dev', 'Proyecto Sin Techo');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $appDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('general');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header>
			<h1><?php echo $this->Html->link($appDescription, 'http://proyectosintecho.com.ar'); ?></h1>
		</header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
			<?php echo $this->Html->link(
					$this->Html->image('copyleft_30.png', array('alt' => $appDescription, 'border' => '0', 'id' => 'layout_nube')),
					'http://www.proyectosintecho.com.ar/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			<span>Proyecto Final de Carrera :: María Celeste Weidmann y Alejandro Esteban Prieto :: Universidad Tecnológica Nacional - Facultad Regional Santa Fe :: Ingeniería en Sistemas de Información.</span>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
