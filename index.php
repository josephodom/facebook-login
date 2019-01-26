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
	
	// Get the facebook helper classes
	'includes/facebook',
	
	// Monolith controller class that holds all the pages
	'includes/controller',
] as $file){
	require_once $file . '.php';
}

/**
 * Determine what page is being accessed
 */
if(empty($page = $_GET['page'])){
	$page = 'index';
}

/**
 * Display the page
 */
echo Controller::Execute($page);

?>