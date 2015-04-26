<?php

	function __autoload($classname)  
	{  
 		$class_file =$classname.".php";  
 		if (file_exists($class_file)){  
 		require_once 'redis-demo/RedisController.php';  
 		}  
	}