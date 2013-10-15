<?php
/**
 * Base config values
 * 
 * @package Ginger
 */

define('BASEPATH', __DIR__."/..");

$includePaths = array(
		BASEPATH."/vendor/",
		BASEPATH."/library/",
		BASEPATH."/modules/"
);

// Set include path & Register autoload
set_include_path(implode(PATH_SEPARATOR, $includePaths)); 
spl_autoload_register(function($c){@include preg_replace('#\\\|_(?!.+\\\)#','/',$c).'.php';}); include 'autoload.php';

\Ginger\Registry::set("routes", array(
		"/sample",
		"/"
));
