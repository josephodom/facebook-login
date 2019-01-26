<?php

session_start();

// Using @ because this throws a notice when error reporting is sensitive & ?page isn't set
if(@empty($page = $_GET['page'])){
	$page = '';
}

if(empty($state = $_SESSION['state'])){
	$state = $_SESSION['state'] = bin2hex(random_bytes(16));
}

$appID = file_get_contents('fbid.txt');
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
		
		$_SESSION['code'] = $_GET['code'];
		
		header('Location:./');
		die();
	break;
	
	default:
		if(!empty($_SESSION['code'])){
			echo 'Logged in as ';
		}else{
			echo '<a href="?page=login">Log in</a>';
		}
	break;
}

?>