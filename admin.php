<?php 
	// start session
	session_start();
	//load file config.php
	include 'config.php';
	//load file model.php
	include 'model/model.php';
	//---------------
	//nếu user chưa đăng nhập thì  hiển thị mvc login cong ngc lại thì hiển thị mvc master.php
	if (isset($_SESSION["c_email"]) == false) {
		include 'controller/backend/controller_login.php';
	}
	else{
		//lấy gtri controller truyền từ url
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		// gán các thành phần để $controller thì đường dẫn hoàn chỉnh. VD: controller/backend/controller_user.php
		$controller = "controller/backend/controller_$controller.php";

	//load file master
	include 'view/backend/master.php';
	}
	//---------------

 ?>