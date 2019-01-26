<?php

class Controller {
	public static function Execute($page){
		if(!method_exists('Controller', $page)){
			return $GLOBALS['twig']->render('404.html');
		}
		
		return call_user_func('Controller::' . $page);
	}
}

?>