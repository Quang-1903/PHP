<?php 
if(isset($_POST['id'])){
    require_once('../database.php');

	$id =$_POST['id'];
    echo $id;
	$sql = "delete from users where id='$id'";
	execute($sql);
}