<?php 
	class controller_lates_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi 
			$arr=$this->model->get_all("select *from tbl_product order by pk_product_id desc limit 0,4");
			//load view
			include "view/frontend/view_lates_product.php";
		}
	}
	new controller_lates_product();
 ?>