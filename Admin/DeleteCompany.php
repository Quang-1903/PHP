<?php 
if(isset($_POST['TenCty'])){
    require_once('../database.php');

	$id =$_POST['TenCty'];
    echo $id;
	$sql = "delete from congty where TenCty='$id'";
	execute($sql);
}