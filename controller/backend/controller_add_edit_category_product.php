<?php 
	class controller_add_edit_category_product{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
					$arr = $this->model->get_a_record("select * from tbl_category_product where pk_category_product_id = $id");
					break;
				case 'do_edit':
					$c_name = $_POST["c_name"];
					$this->model->execute("update tbl_category_product set c_name='$c_name' where pk_category_product_id = $id");
					header("location:admin.php?controller=category_product");
					break;
				case 'add':
					$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
					break;
				case 'do_add':
				$c_name=$_POST["c_name"];
					$arr = $this->model->execute("insert into tbl_category_product(c_name) values('$c_name')");
					header("location:admin.php?controller=category_product");
					break;
				case 'delete':
					$this->model->execute("delete from tbl_category_product where pk_category_product_id=$id");
					header("location:admin.php?controller=category_product");
					break;
			}

			//view
			include 'view/backend/view_add_edit_category_product.php';
		}
	}
	new controller_add_edit_category_product();

 ?>