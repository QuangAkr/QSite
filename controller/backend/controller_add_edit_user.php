<?php 
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();
		//--------------
		// lấy biến act từ url
		$act = isset($_GET["act"])? $_GET["act"]:"";
		//lấy biến id từ url
		$id = isset($_GET["id"])? $_GET["id"]:0;
		//tọa biến $form_action để xác định trạng thái submit
		//ktr các TH của $act
		switch ($act) {
			case 'edit':
				$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
				//lấy 1 bản ghi tương ứng vs id truyền vào
				$arr = $this->model->get_a_record("select * from tbl_user where pk_user_id = $id");
				break;
			case 'do_edit':
				$c_fullname = $_POST["c_fullname"];
				// update bản ghi có id truyền vào
				$this->model->execute("update tbl_user set c_fullname='$c_fullname' where pk_user_id = $id");
				// nếu user nhập password mới 
				$c_password = $_POST["c_password"];
				if ($c_password !="") {
					//mã hóa password bằng hàm md5
					$c_password = md5($c_password);
					//update ban ghi có id truyền vào
					$this->model->execute("update tbl_user set c_password='$c_password' where pk_user_id = $id");
				}
				//quay lại trang user
				header("location:admin.php?controller=user");

				break;

			case 'add':
				$form_action = "admin.php?controller=add_edit_user&act=do_add";

				break;
			case 'do_add':
				$c_fullname = $_POST["c_fullname"];
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				$c_password = md5($c_password);
				// insert bản ghi
				$this->model->execute("insert into tbl_user(c_fullname,c_email,c_password) values('$c_fullname' , '$c_email' , '$c_password') " );
				// quay lại trang 
				header("location:admin.php?controller=user");

				break;
			case 'delete':
				$this->model->execute("delete from tbl_user where pk_user_id=$id");
				header("location:admin.php?controller=user");
				break;
		}
		//--------------
		//load view 
			include 'view/backend/view_add_edit_user.php';
		}
	}
new controller_add_edit_user();
 ?>