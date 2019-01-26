<?php

/**
 * Include all the prerequisites
 */
foreach([
	// Composer requires: Symfony yaml parser, twig
	'vendor/autoload',
	
	// Settings imported via Symfony yaml
	'includes/yaml',
	
	// Set up twig
	'includes/twig',
	
	// Set up the session
	'includes/session',
	
	// Monolith controller class that holds all the pages
	'includes/controller',
] as $file){
	require_once $file . '.php';
}

/**
 * Display the page
 */
echo Controller::Execute('test');

?>