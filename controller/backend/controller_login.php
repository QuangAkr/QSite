<?php 
	class controller_login{
		// tạo biến $model 
		public $model;
		public function __construct(){
			// khởi tạo object của class model, gán vào biến model
			$this->model = new model();
			//-------
			//nếu user ấn nút submit
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				// ktra đăng nhập
				$check = $this->model->get_a_record(" select c_email , c_password from tbl_user where c_email='$c_email' ");
				if (isset($check->c_email)) {
					if ($check->c_password == md5($c_password)) {
						//gán vào session
						$_SESSION["c_email"] = $c_email;
						//quay trỏ lại trang admin
						header("location:admin.php");
					}
				}
			}
			//-------
			//load view
			include 'view/backend/view_login.php';
		}
	}
new controller_login();
 ?>