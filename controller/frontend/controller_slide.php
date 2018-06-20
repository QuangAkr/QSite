<?php 
	class controller_slide{
		public $model;
		public function __construct(){
			$this->model=new model();
			
			//lấy tasrat cả bản ghi 
			$arr=$this->model->get_all("select * from tbl_slide order by pk_slide_id desc");
			//load view
			include "view/frontend/view_slide.php";
		}
	}
	new controller_slide();
 ?>