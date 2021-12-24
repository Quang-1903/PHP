<?php
 require_once('config.php');


function execute($sql)
{
    $connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        //cho phép viết tiếng việt
    mysqli_set_charset($connect,"utf8");
    
    mysqli_query($connect,$sql);  

    //close
    mysqli_close($connect);

} 

function executeResult($sql)
{
	$connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
 		//cho phép viết tiếng việt
    mysqli_set_charset($connect,"utf8");
    
    $data = []; 
    $result= mysqli_query($connect,$sql);  
    while ($row = mysqli_fetch_array($result,1)) {
     	$data[]= $row; 
     } 
    //close
    mysqli_close($connect);

    return $data;
}
function countRow($sql)
{
    $connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        //cho phép viết tiếng việt
    mysqli_set_charset($connect,"utf8");
    $result=  mysqli_num_rows(mysqli_query($connect,$sql));
    mysqli_close($connect);
    return $result;
}
function executeSingleResult($sql)
{
    $connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        //cho phép viết tiếng việt
    mysqli_set_charset($connect,"utf8");
    
    $result= mysqli_query($connect,$sql);  
    $row = null;
    if($result != null)
    {
            $row = mysqli_fetch_array($result,1);
    }
    //close
    mysqli_close($connect);

    return $row;
}

function getPwdSecurity($pwd){
    return md5(md5($pwd).MD5_PRIVATE_KEY);
    //return md5($pwd);
}


function validateToken()
{
    $token='';
    if (isset($_COOKIE['token'])) {
        $token= $_COOKIE['token'];

        $sql= "select * from sinhvien where token='$token'";
        $data= executeResult($sql);
        if($data !=null && count($data)>0 ){
            return $data[0];
        }
    }
    return null;
}
function validateToken1()
{
    $token='';
    if (isset($_SESSION['username'])) {
        $token=$_SESSION['username'];

        $sql= "select * from users where token='$token'";
        $data= executeResult($sql);
        if($data !=null && count($data)>0 ){
            return $data[0];
        }
    }
    return null;
}

function test_input($data) {
     $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);	
     //$data = trim($data);
     $data = preg_replace('/\s+/', '', $data);
     $data = stripslashes($data);
     $data = mysqli_real_escape_string($con, $data);
     return $data;
   }
function connectdb($sql){
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return mysqli_query($con,$sql);
}