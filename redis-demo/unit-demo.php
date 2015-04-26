<?php 
	function __autoload($classname){
		if(file_exists($classname.'.php')){
			require_once $classname.'.php';
		}else{
			echo 'can not find the '.$classname.' the php file';

		}
	}
	
	$redis=new RedisController();
	// $redis->setHashMap();
	var_dump($redis->getMessageByTimestamp('user1'));
	// $redis->test();