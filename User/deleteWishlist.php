<?php 
if(isset($_POST['id'])){
	require('../database.php');	
	$id =$_POST['id'];
    $sql = "delete from wishlist where id='$id'";
	execute($sql);
}