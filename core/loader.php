<?php

	function __autoload($classname)  
	{  
		if(file_exists('controller/'.$classname.'.php')){
			require_once 'controller/'.$classname.'.php';
		}else{
			echo $classname.'类文件不存在';
		}
	}