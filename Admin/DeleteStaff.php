<?php 
if(isset($_POST['MaNV'])){
    require_once('../database.php');

	$id =$_POST['MaNV'];
    echo $id;
	$sql = "delete from nhanvien where MaNV='$id'";
	execute($sql);
}