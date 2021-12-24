<?php
    require('../database.php');	
    session_start();
    // Destroy session
    if(isset($_SESSION['username'])){
        $token=$_SESSION['username'];
        $sql="UPDATE users SET token = '' where token ='$token'";
        $data=execute($sql);
    }
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
