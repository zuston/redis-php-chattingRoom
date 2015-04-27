<?php
	class mainController{
		public function __construct(){

		}

		public function checkRender(){
			if($_SESSION['username']!=''){
				include_once('template/ui-title.php');
			}else{
				include_once('template/page-login.php');
			}
		}
	}