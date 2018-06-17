<?php 
	class controller_left_hotproduct{
		public $model;
		public function __construct(){
			$this->model=new model();
			//
			$arr=$this->model->get_all("select *from tbl_product where c_hotproduct=1 order by pk_product_id desc limit 0,3");
			//load view 
			include "view/frontend/view_left_hotproduct.php";
		}
	}
	new controller_left_hotproduct();
 ?>