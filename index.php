<?php

function debug(){
	ob_start();
	
	echo '<pre>';
	
	foreach(func_get_args() as $arg){
		print_r($arg);
	}
	
	echo '</pre>';
	
	return ob_get_clean();
}

function getAccessToken($code){
	global $appID, $appSecretID, $redirectURI;
	
	$url = "https://graph.facebook.com/v3.2/oauth/access_token?client_id=$appID&redirect_uri=$redirectURI&client_secret=$appSecretID&code=$code";
	
	$data = json_decode(file_get_contents($url));
	
	if(empty($data->access_token)){
		return false;
	}
	
	return $data->access_token;
}

function getUser(){
	$user = json_decode(file_get_contents("https://graph.facebook.com/me?access_token=$_SESSION[accessToken]"));
	
	$user->photo = file_get_contents("https://graph.facebook.com/me/picture?access_token=$_SESSION[accessToken]");
	
	return $user;
}

session_start();

// Using @ because this throws a notice when error reporting is sensitive & ?page isn't set
if(@empty($page = $_GET['page'])){
	$page = '';
}

if(empty($state = $_SESSION['state'])){
	$state = $_SESSION['state'] = bin2hex(random_bytes(16));
}

$appID = file_get_contents('fbid.txt');
$appSecretID = file_get_contents('fbid-secret.txt');
$redirectURI = 'http://localhost/portfolio/facebook/?page=logged-in';

switch($page){
	case 'login':
		header("Location:https://www.facebook.com/v3.2/dialog/oauth?client_id=$appID&redirect_uri=$redirectURI&state=$state");
		die();
	break;
	
	case 'logged-in':
		if($_GET['state'] != $state){
			die('FATAL ERROR! Mismatched state!');
		}
		
		$accessToken = $_SESSION['accessToken'] = getAccessToken($_GET['code']);
		
		if(!$accessToken){
			die('FAILURE');
		}
		
		$user = getUser();
		
		if(!empty($user->name)){
			$_SESSION['user'] = $user;
		}else{
			die('Could not get user');
		}
		
		header('Location:./');
		die();
	break;
	
	case 'photo':
		if(!empty($_SESSION['user']->photo) && false){
			header('Content-type:image/jpeg');
			
			die($_SESSION['user']->photo);
		}else{
			// Blank black PNG as default
			header('Content-type:image/png');
			
			$img = imagecreate(50, 50);
			$bg = imagecolorallocate($img, 0, 0, 0);
			
			imagepng($img);
			imagedestroy($img);
		}
	break;
	
	default:
		if(!empty($_SESSION['code'])){
			echo 'Logged in as ' . $_SESSION['user']->name . '<br><br><img src="?page=photo" alt="Photo">';
		}else{
			echo '<a href="?page=login">Log in</a>';
		}
	break;
}

?>