<?php

class Controller {
	private static function template($name, $vars = []){
		if($name == '500.html' || $name == '404.html'){
			http_response_code(intval($name));
		}
		
		return $GLOBALS['twig']->render($name, $vars);
	}
	
	public static function Execute($page){
		if(!method_exists('Controller', $page)){
			return self::template('404.html');
		}
		
		return call_user_func('Controller::' . $page);
	}
	
	public static function index(){
		if(!empty($_SESSION['user'])){
			return self::template('logged-in.html', [
				'user' => $_SESSION['user'],
			]);
		}
		
		return self::template('login.html');
	}
	
	public static function login(){
		global $settings;
		
		// Set the state
		// According to the docs, random_bytes is crypto-secure
		// It returns binary, so we want to turn it into hex so it's a string
		$_SESSION['state'] = bin2hex(random_bytes(16));
		
		// Build the full redirect URL
		$redirect = getRedirectURI();
		
		// Set this up for easier string interpolation
		$public = $settings['facebook']['public'];
		
		// Redirect to the facebook login page
		header("Location:https://www.facebook.com/v3.2/dialog/oauth?client_id=$public&redirect_uri=$redirect&state=$_SESSION[state]");
		die();
	}
	
	public static function logout(){
		session_destroy();
		
		header('Location:./');
		die();
	}
	
	public static function fbhook(){
		if(empty($_SESSION['state']) || $_GET['state'] != $_SESSION['state']){
			return self::template('500.html', [
				'message' => 'State mismatch error',
			]);
		}
		
		if(!$_SESSION['accessToken'] = getAccessToken($_GET['code'])){
			return self::template('500.html', [
				'message' => 'Could not get access token',
			]);
		}
		
		$_SESSION['user'] = getUser($_SESSION['accessToken']);
		
		header('Location: ./');
		die();
	}
	
	public static function photo(){
		if(empty($_SESSION['user']) || empty($_SESSION['user']->photo)){
			return self::template('500.html', [
				'message' => 'Could not get user photo',
			]);
		}
		
		header('Content-type: image/jpeg');
		die($_SESSION['user']->photo);
	}
	
	public static function privacy_policy(){
		return self::template('privacy_policy.html');
	}
}

?>