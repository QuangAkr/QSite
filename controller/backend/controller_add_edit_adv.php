<?php 
	class controller_add_edit_adv{
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
				$form_action = "admin.php?controller=add_edit_adv&act=do_edit&id=$id";
				//lấy 1 bản ghi
				$arr = $this->model->get_a_record("select * from tbl_adv where pk_adv_id=$id");
				
				break;
			case 'do_edit':
				$c_name = $_POST["c_name"];
				$c_url = $_POST["c_url"];
				
					 $this->model->execute("update tbl_adv set c_name='$c_name', c_url='$c_url' where pk_adv_id=$id");
				//---------	
					$c_img = $_FILES["c_img"]["name"];
					if ($c_img != "") {
						//------------
						//laays anh cũ để xôas
						$old_img = $this->model->get_a_record("select c_img from tbl_adv where pk_adv_id=$id");
						//xóa ảnh
						unlink("public/upload/adv/".$old_img->c_img);
						//------------
					 	$tmp = $_FILES["c_img"]["tmp_name"]; //// c_img  -> tên file ; tmp_name -> đuôi file
					 	$c_img = time().$c_img;
					 	move_uploaded_file($tmp,"public/upload/adv/$c_img");
						 //-----------
					 	//update lại c_img trong csdl
					 	$this->model->execute("update tbl_adv set c_img ='$c_img' where pk_adv_id=$id");
					 } 
				//---------
					
				header("location:admin.php?controller=adv");
				break;
				case 'add':
				$form_action = "admin.php?controller=add_edit_adv&act=do_add";
					
					break;
				case 'do_add':
				$c_name = $_POST["c_name"];
				$c_url = $_POST["c_url"];
				$c_img=time().$_FILES["c_img"]["name"];
				if ($c_img != "") {
					//------------
					 	$tmp = $_FILES["c_img"]["tmp_name"];
					 	$c_img = time().$c_img;
					 	move_uploaded_file($tmp,"public/upload/adv/$c_img");
					 //-----------
				}
				$this->model->execute("insert into tbl_adv(c_name,c_url,c_img) values('$c_name','$c_url','$c_img')") ;
					//header("location:admin.php?controller=adv");
				case 'delete':
						//laays anh cũ để xôas
						$old_img = $this->model->get_a_record("select c_img from tbl_adv where pk_adv_id=$id");
						//xóa ảnh
						unlink("public/upload/adv/".$old_img->c_img);
					$this->model->execute("delete from tbl_adv where pk_adv_id = $id");
					header("location:admin.php?controller=adv");
					break;
			}
			//load view
				include 'view/backend/view_add_edit_adv.php';
		}
	}
new controller_add_edit_adv();
 ?>