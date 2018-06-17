<?php 
	class model{
		// hàm lấy danh sach tất cả các bản ghi
		public function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			//$result = mysqli_query($db,$sql) or die("Lỗi"); // lỗi
			$arr = array();
			while ($rows = mysqli_fetch_object($result)) {
				$arr[] = $rows;
			}
			return $arr;
		}
		// thực thi câu truy vấn
		public function execute($sql){
			global $db;
			$result = mysqli_query($db,$sql);

		}
		// laays 1 ban ghi 
		public function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			//$result = mysqli_query($db,$sql) or die("Lỗi"); // lỗi
			$rows = mysqli_fetch_object($result);
			return $rows;
		}
		// trả về số lượng bản ghi
		public function get_num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
	}

 ?>