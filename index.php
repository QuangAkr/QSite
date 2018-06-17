<?php 
	session_start();
	include "model/model.php";
	include "config.php";
	$controller = isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller!="")
		$controller="controller/frontend/controller_$controller.php";
		// gán các thành phần để $controller thì đường dẫn hoàn chỉnh. VD: controller/backend/controller_user.php
	else
		$controller = "controller/frontend/controller_home.php";

	//nếu tồn tại đường dẫn thực ở file $controller thì load file master2.php còn nếu ko thì load file master1.php
	if(file_exists($controller)){
		include 'view/frontend/master2.php';
	}
	else
		include 'view/frontend/master1.php';
 ?>