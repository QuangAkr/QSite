<?php 
	class controller_hotproduct{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi 
			$arr=$this->model->get_all("select *from tbl_product where c_hotproduct=1 order by pk_product_id desc limit 0,4");
			//load view
			include "view/frontend/view_hotproduct.php";
		}
	}
	new controller_hotproduct();
 ?>