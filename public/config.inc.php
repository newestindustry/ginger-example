<?php
/**
 * Base config values
 *
 * @package Ginger
 */

$includePaths = array(
    __DIR__."/../vendor/",
    __DIR__."/../modules/"
);

set_include_path(implode(PATH_SEPARATOR, $includePaths));
spl_autoload_register(function($c){@include preg_replace('#\\\|_(?!.+\\\)#','/',$c).'.php';}); include 'autoload.php';

\Ginger\Routes::set("/");
\Ginger\Routes::set("/sample");

