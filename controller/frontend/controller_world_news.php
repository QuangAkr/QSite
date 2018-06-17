<?php 
	class controller_world_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi
			$arr=$this->model->get_all("SELECT * from tbl_news where fk_category_news_id = 3 order by pk_news_id desc limit 0,5");
			//load view
			include "view/frontend/view_world_news.php";
		}
	}
	new controller_world_news();
 ?>