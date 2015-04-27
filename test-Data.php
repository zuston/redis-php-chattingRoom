<?php 
	require_once 'redis/RedisController.php';
	$redis=new RedisController();
	$num=time();
	$v=$redis->getMessageByTimestamp('user1');
	var_dump($v);