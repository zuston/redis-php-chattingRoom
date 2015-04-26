<?php
	require_once 'redis-demo/RedisController.php';
	$value=$_REQUEST['value'];
	// $value='fuck'.time();
	$redis=new RedisController();
	$redis->setMessageSS('user1',$value);
	$arr=array('success'=>'1','name'=>'zuston','text'=>$value);
    echo json_encode($arr);