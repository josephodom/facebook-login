<?php

$twigLoader = new Twig_Loader_Filesystem('./twig/templates/');
$twig = new Twig_Environment($twigLoader, [
	'cache' => './twig/cache/',
	'debug' => $settings['app']['debug'],
]);

?>