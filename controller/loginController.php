<?php
	class loginController{
		public function __construct(){
			echo 2222;
		}

		public function login(){
			if($_SESSION['username']!=''){
				include_once('template/ui-title.php');
			}else{
				include_once('template/page-login.php');
			}
			
		}

		public function loginCheck($username,$password){
			echo $username;
			if($username==''||$password==''){
				include_once('template/error.html');
			}else{
				echo $username;
				require_once 'redis/RedisController.php';
				$redis=new RedisController();
				$passwd=$redis->getLoginHashMapByKey($username);
				if(md5($passwd)==$password){
					$_SESSION['username']=$username;
					include_once('template/ui-title.php');
				}else{
					include_once('template/page-login.php');
				}
			}
			
		}
	}

