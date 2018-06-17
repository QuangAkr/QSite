<?php 
	class controller_news_detail{
		public $model;
		public function __construct(){
			$this->model=new model();
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//lấy 1 bản ghi
			$arr=$this->model->get_a_record("select * from tbl_news where pk_news_id=$id;");
			//load view
			include "view/frontend/view_news_detail.php";
		}
	}
	new controller_news_detail();
 ?>