<?php
session_start();
if (!isset($_SESSION['name'])){
	$path = explode('/',__URL__,-1);
	$path = join('/',$path);
	header('Location:'.$path.'/login');
	exit;
}else{
	if ($_SESSION['uname'] != 'admin'){
		exit;
	}
}