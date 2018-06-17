<?php 
		// hủy session
		unset($_SESSION["c_email"]);
		//quay lại trang
		header("location:admin.php");

 ?>