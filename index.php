<?php 
	session_start();
	require 'core/loader.php';
	// $_SESSION['username']='';
	$controller=empty($_REQUEST['ctl'])?'main':$_REQUEST['ctl'];
	$value     =empty($_REQUEST['value'])?'no-v':$_REQUEST['value'];
	$username  =empty($_GET['username'])?'no-u':$_GET['username'];
	$password  =empty($_GET['password'])?'no-p':$_GET['password'];
	$data=$_REQUEST['listener'];
	if($controller=='main'){
		if($username!='no-u'&&$password!='no-p') {

			loginController::loginCheck($username,md5($password));
			
		}elseif($value!='no-v'){
			contentController::submit($value);
		}elseif($data!=''){
			require 'core/data.php';
		}else{
			$ctl=$controller.'Controller';
			$ctl::checkRender();
		}

	}else{
		$ctl=$controller.'Controller';
		$ctl::$controller();
		// loginController::login();
	}



	
