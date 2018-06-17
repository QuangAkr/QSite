<?php 
	class controller_popular_news{
		public $model;
		public function __construct(){
			$this->model=new model();
			//lấy tasrat cả bản ghi
			$arr=$this->model->get_all("SELECT * from tbl_news where fk_category_news_id IN ('1','2','4','5') order by pk_news_id desc limit 0,5");
			//load view
			include "view/frontend/view_popular_news.php";
		}
	}
	new controller_popular_news();
 ?>