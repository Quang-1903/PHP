<?php 
if(isset($_POST['masp'])){
    require_once('../database.php');

	$id =$_POST['masp'];
    echo $id;
	$sql = "delete from sanpham where MaSP='$id'";
	execute($sql);
}