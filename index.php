<?php 
	session_start();
	// $_SESSION['username']='';

	$action=$_REQUEST['action'];

	if($action=='login'||$action==''){
		if($_SESSION['username']!=''){
			// require_once 'data.php';
			include_once('template/ui-title.php');
		}else{
			include_once('template/page-login.php');
		}
	}

	