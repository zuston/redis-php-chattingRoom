<?php 
	session_start();
	require_once 'redis-demo/RedisController.php';

	$username=$_GET['username'];
	$password=$_GET['password'];
	if($username==''||$password==''){
		include_once('template/error.html');
	}

	$redis=new RedisController();
	$passwd=$redis->getLoginHashMapByKey($username);
	if($passwd==$password){
		$_SESSION['username']=$username;
		header("Location:index.php");
	}else{
		echo 'error passwd';
	}

