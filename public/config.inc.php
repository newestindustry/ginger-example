<?php
/**
 * Base config values
 * 
 * @package Ginger
 */

define('BASEPATH', realpath(dirname(__FILE__))."/..");

$includePaths = array(
		BASEPATH."/vendor/",
		BASEPATH."/library/",
		BASEPATH."/modules/",
		"/opt/gdev/ginger-rest/src/"
);

// Set include path & Register autoload
set_include_path(implode(PATH_SEPARATOR, $includePaths)); 
spl_autoload_register(function($c){@include preg_replace('#\\\|_(?!.+\\\)#','/',$c).'.php';}); include 'autoload.php';

function exception_handler($exception) {
	$request		= new \Ginger\Request();
	$response 		= new \Ginger\Response();
	
	$response->setStatus($exception->getCode());
	$response->setData(array("message" => $exception->getMessage()));
	$response->send();
}

set_exception_handler('exception_handler');

\Ginger\Registry::set("routes", array(
		"/messages",
		"/"
));