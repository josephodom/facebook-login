<?php

foreach([
	'vendor/autoload',
	'includes/yaml',
	'includes/twig',
	'includes/session',
] as $file){
	require_once $file . '.php';
}

echo $twig->render('main.html', [
	'title' => 'Facebook Login API',
]);

?>