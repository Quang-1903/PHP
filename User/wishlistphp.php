<?php
if(!isset($_SESSION['name'])){
header('location:login.php');
}else{
  if(isset($_GET['addwl'])){
    $c_id = $_SESSION['name']; 
    $p_id = $_GET['addwl'];
    $sql_Check = "SELECT * FROM wishlist where pid = '$p_id' AND uid ='$c_id' ";
    $result_check = executeResult($sql_Check);
    if(count($result_check)>0){
      echo '<script language="javascript">';
			echo 'alert("Sản phẩm đã tồn tại trong Wishlist!")';
			echo '</script>';
      header('location:wishlist.php');
    }else{
      $insertWishlist = "INSERT INTO wishlist (pid, uid) VALUES ('$p_id', '$c_id')";   
      execute($insertWishlist);
      header('location:wishlist.php');
    }
     //header('location:wishlist.php');
  }
}

?>