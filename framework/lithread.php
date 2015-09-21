<?php

/**
 * Created by PhpStorm.
 * User: LIKE
 * Date: 2015/9/21
 * Time: 23:19
 */
class LiThread {

	public function __construct(array $config = array()){
		//do some things
	}

	public function run(){

		$controller = $_GET['controller'];
		$action = $_GET['action'];

		new $controller->$action();
	}
}