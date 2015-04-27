<?php 
	class contentController{
		public function __construct(){

		}
		public function submit($value){
			require_once 'redis/RedisController.php';
			// $value='fuck'.time();
			$redis=new RedisController();
			$redis->setMessageSS($_SESSION['username'],$value);
			$arr=array('success'=>'1','name'=>'zuston','text'=>$value);
		    echo json_encode($arr);
		}
	}