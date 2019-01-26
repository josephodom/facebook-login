<?php

function getAccessToken($code){
	global $settings;
	
	$redirect = getRedirectURI();
	
	$public = $settings['facebook']['public'];
	$secret = $settings['facebook']['secret'];
	
	$url = "https://graph.facebook.com/v3.2/oauth/access_token?client_id=$public&redirect_uri=$redirect&client_secret=$secret&code=$code";
	
	$data = json_decode(file_get_contents($url));
	
	if(empty($data->access_token)){
		return false;
	}
	
	return $data->access_token;
}

function getRedirectURI(){
	global $settings;
	
	return $settings['app']['domain'] . $settings['app']['root'] . $settings['facebook']['redirect'];
}

function getUser($accessToken){
	$user = json_decode(file_get_contents("https://graph.facebook.com/me?access_token=$accessToken"));
	
	$user->photo = file_get_contents("https://graph.facebook.com/me/picture?access_token=$accessToken");
	
	return $user;
}

?>