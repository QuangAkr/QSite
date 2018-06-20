<?php 
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "qsite";
	$db = mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($db,"UTF8");
 ?>
<base href="http://localhost/qsite/" target="_blank, _self, _parent, _top">