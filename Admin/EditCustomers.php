<?php
require_once("../database.php");
    $id=$username=$email=$password=$confirmpassword='';
    $err=[];
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql='SELECT * FROM users where id='.$id;
      $customerList = executeResult($sql);
      if($customerList!=null && count($customerList)>0){
        $ctm=$customerList[0];
        $username=$ctm['username'];
        $email=$ctm['email'];
        $password=$ctm['password'];

      }else{
        $id='';
      }
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST["username"])){
          $err['username']['required']="Vui lòng nhập họ tên!";
        }else if(strlen(trim($_POST["username"]))<5){
          $err['username']['min']="Tên phải lớn hơn 5 ký tự";
        }else{
          $username=test_input($_POST["username"]);
        }
        //validate email
        if(empty($_POST["email"])){
          $err['email']['required']="Vui lòng nhập Email của bạn!";
        }else if(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
          $err['email']['invalid']="Email không hợp lệ";
        }else{
          $email=test_input($_POST["email"]);
        }	
        //validate password
        if(empty($_POST["password"])){
          $err['password']['required']="Vui lòng nhập mật khẩu!";
        }else if(strlen(trim($_POST["password"]))<6){
          $err['password']['min']="Password phải lớn hơn 6 ký tự";
        }else{
          $password=test_input($_POST["password"]);
        }	
        //validate confirmpassword		
        if(empty($_POST["confirmpassword"])){
          $err['confirmpassword']['required']="Vui lòng nhập lại mật khẩu của bạn!";
          
        }else{
          $confirmpassword=test_input($_POST["confirmpassword"]);
        }
        if($password!==$confirmpassword){
          $err['confirmpassword']['invalid']="Password không giống nhau";
        }
        if($err==[]){
          $pass=getPwdSecurity($password);
          $sql= "update users set username='$username',email='$email',password='$pass' where id='$id'";
          execute($sql);
          header("Location:Customers.php");
        }
      }
    }
?>
<!DOCTYPE <html></html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

    <?php
       require_once("headeAdmin.php");      
    ?>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Sửa sản phẩm</h3>
      </div>
      <div class="panel-body">
            <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Username</label>
                  <input  type="text" name="id" id="masp" class="form-control" value="<?=$id?>" style="display: none;">
                  <input  type="text" name="username" id="masp" class="form-control" value="<?=$username?>" >
                  <?php
											echo (!empty($err['username']['required']))?'<span>'.$err['username']['required'].'</span>':false;
											echo (!empty($err['username']['min']))?'<span>'.$err['username']['min'].'</span>':false;
											echo (!empty($err['username']['unique']))?'<span>'.$err['username']['unique'].'</span>':false;
											?>
               </div>
               <div class="form-group">
                  <label>Email</label> 
                  <input type="text" name="email" id="TenSP" class="form-control" value="<?=$email?>" >
                  <?php
											echo (!empty($err['email']['required']))?'<span>'.$err['email']['required'].'</span>':false;
											echo (!empty($err['email']['invalid']))?'<span>'.$err['email']['invalid'].'</span>':false;
											?>
               </div>
               <div class="form-group">
                  <label>Password</label> 
                  <input  type="text" name="password" id="TenSP" class="form-control" value="<?=$password?>">
                  <?php
											echo (!empty($err['password']['required']))?'<span>'.$err['password']['required'].'</span>':false;
											echo (!empty($err['password']['min']))?'<span>'.$err['password']['min'].'</span>':false;
											?>
               </div>
               <div class="form-group">
                  <label>Confirm Password</label> 
                  <input  type="text" name="confirmpassword" id="TenSP" class="form-control">
                  <?php
											echo (!empty($err['confirmpassword']['required']))?'<span>'.$err['confirmpassword']['required'].'</span>':false;
											echo (!empty($err['confirmpassword']['invalid']))?'<span>'.$err['confirmpassword']['invalid'].'</span>':false;
											?>
               </div>
                  <br/>
                  <button class="btn btn-success" >Lưu</button>
            </form> 
            <br/>    
      </div>
    </div>
      
    </div>
  </div>
                </div>
                <!-- /.container-fluid -->
                
            </div>
            <!-- End of Main Content -->
             
            <!-- Footer -->
            <?php 
                require_once("footerAdmin.php");
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>