<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	// Router::connect('/', array('layout' => 'login', 'controller' => 'users', 'action' => 'login'));
	Router::connect('/', array('layout' => 'alumno', 'controller' => 'cursos', 'action' => 'listar'));
	Router::connect('/inicio', array('controller' => 'pages', 'action' => 'display', 'inicio'));

	# Pruebas de Concepto
	Router::connect('/alumno', array('layout' => 'alumno', 'controller' => 'pages', 'action' => 'display', 'alumno'));
	Router::connect('/curso', array('layout' => 'alumno', 'controller' => 'pages', 'action' => 'display', 'curso'));
	Router::connect('/clase', array('layout' => 'alumno', 'controller' => 'pages', 'action' => 'display', 'clase'));
	Router::connect('/profesor', array('layout' => 'profesor', 'controller' => 'pages', 'action' => 'display', 'profesor'));
	Router::connect('/administrador', array('layout' => 'administrador', 'controller' => 'pages', 'action' => 'display', 'administrador'));

	Router::connect('/cursos', array('layout' => 'alumno', 'controller' => 'cursos', 'action' => 'listar'));
	
	# Redirección Cursos >> Clases >> Etapas
	// Router::connect('/cursos/:curso/:clase/:etapa', array('layout' => 'alumno', 'controller' => 'etapas', 'action' => 'display', 'clase'));
	// Router::connect('/:controller/:year/:month/:day', array('action' => 'index'), array('year' => '[12][0-9]{3}', 'month' => '0[1-9]|1[012]', 'day' => '0[1-9]|[12][0-9]|3[01]'));

	# Redirección Clases >> Etapas
	Router::connect('/clases/:clase/:etapa', array('layout' => 'alumno', 'controller' => 'clases', 'action' => 'derivar'), 
		array('pass'=>array('clase', 'etapa'), 'clase'=>'[0-9]+','etapa'=>'[0-9]+'));
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
