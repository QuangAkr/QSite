<?php 
	class controller_add_edit_slide{
		public $model;
		public function __construct(){
			$this->model = new model();
		//--------------
		// lấy biến act từ description
		$act = isset($_GET["act"])? $_GET["act"]:"";
		//lấy biến id từ description
		$id = isset($_GET["id"])? $_GET["id"]:0;
		//tọa biến $form_action để xác định trạng thái submit
		//ktr các TH của $act
		switch ($act) {
			case 'edit':
				$form_action = "admin.php?controller=add_edit_slide&act=do_edit&id=$id";
				//lấy 1 bản ghi
				$arr = $this->model->get_a_record("select * from tbl_slide where pk_slide_id=$id");
				
				break;
			case 'do_edit':
				$c_name = $_POST["c_name"];
				$c_description = $_POST["c_description"];
				
					 $this->model->execute("update tbl_slide set c_name='$c_name', c_description='$c_description' where pk_slide_id=$id");
				//---------	
					$c_img = $_FILES["c_img"]["name"];
					if ($c_img != "") {
						//------------
						//laays anh cũ để xôas
						$old_img = $this->model->get_a_record("select c_img from tbl_slide where pk_slide_id=$id");
						//xóa ảnh
						unlink("public/upload/slide/".$old_img->c_img);
						//------------
					 	$tmp = $_FILES["c_img"]["tmp_name"]; //// c_img  -> tên file ; tmp_name -> đuôi file
					 	$c_img = time().$c_img;
					 	move_uploaded_file($tmp,"public/upload/slide/$c_img");
						 //-----------
					 	//update lại c_img trong csdl
					 	$this->model->execute("update tbl_slide set c_img ='$c_img' where pk_slide_id=$id");
					 } 
				//---------
					
				header("location:admin.php?controller=slide");
				break;
				case 'add':
				$form_action = "admin.php?controller=add_edit_slide&act=do_add";
					
					break;
				case 'do_add':
				$c_name = $_POST["c_name"];
				$c_description = $_POST["c_description"];
				$c_img=time().$_FILES["c_img"]["name"];
				if ($c_img != "") {
					//------------
					 	$tmp = $_FILES["c_img"]["tmp_name"];
					 	$c_img = time().$c_img;
					 	move_uploaded_file($tmp,"public/upload/slide/$c_img");
					 //-----------
				}
				$this->model->execute("insert into tbl_slide(c_name,c_description,c_img) values('$c_name','$c_description','$c_img')") ;
					//header("location:admin.php?controller=slide");
				case 'delete':
						//laays anh cũ để xôas
						$old_img = $this->model->get_a_record("select c_img from tbl_slide where pk_slide_id=$id");
						//xóa ảnh
						unlink("public/upload/slide/".$old_img->c_img);
					$this->model->execute("delete from tbl_slide where pk_slide_id = $id");
					header("location:admin.php?controller=slide");
					break;
			}
			//load view
				include 'view/backend/view_add_edit_slide.php';
		}
	}
new controller_add_edit_slide();
 ?>