<?php 
	class controller_user{
		public $model;
		public function __construct(){
			//---------------
			$this->model = new model();

			$arr = $this->model->get_all("select * from tbl_user");
			
			//---phân trang -----
			//quy định số bản ghi trên 1 trang
			$record_perpage = 3;
			//tính tổng số bản ghi
			$total = $this->model->get_num_rows("select pk_user_id from tbl_user");
			//tính số trang
			$num_page = ceil($total / $record_perpage) ;
			//lấy trang hiện tại ( là biến p truyền từ url)
			$page = (isset($_GET["p"]) && $_GET["p"] > 0 )? ( $_GET["p"]-1 ):0;
			//lấy từ bản ghi nào
			$from = $page * $record_perpage;
			//lấy các bản ghi
			$arr = $this->model->get_all("select * from tbl_user order by pk_user_id desc limit $from,$record_perpage"); // order by là ham sắp xếp //////////// limit a,b: lấy bản ghi từ a->b 
			//----------------
			//load view
			include 'view/backend/view_user.php';
		}
	}
new controller_user();
 ?>