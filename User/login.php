<?php
    require('../database.php');	
    session_start();
    $user=validateToken1();
    if($user!=null){
        header("Location: index.php");
        die();
    }
    $username=$password='';
    $err=[]; 
    // When form submitted, check and create user session.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //validate user name
        if(empty($_POST["username"])){
            $err['username']['required']="Vui lòng nhập họ tên!";
        }else{
            $username=test_input($_POST["username"]);
            $sql = "SELECT *FROM users WHERE username='$username' ";
		    //$old=mysqli_query($con,$sql);
		    $old=executeResult($sql);
            if(count($old)!==1){
                $err['username']['invalid']="User name không tồn tại";
            }
        }
        // validate password
        if(empty($_POST["password"])){
            $err['password']['required']="Vui lòng nhập mật khẩu!";
        }else{
            //$password=test_input($_POST["password"]);
            $password=$_POST["password"];
            $password=getPwdSecurity($password);
            // echo $password;
            // die();
            //$password=getPwdSecurity($password);
            $sss = "SELECT * FROM users WHERE username='$username'
            AND password='$password'";  
           // $old1=mysqli_query($con,$sql);
            $old1=executeResult($sss);
            // $dola=count($old1);
            // echo $dola;
            //  die();
            if(count($old1)!==1){
                $err['password']['invalid']="Mật Khẩu bạn nhập không đúng!";
            }
        }

        // Check user is exist in the database
          $query    = "SELECT * FROM users WHERE username='$username'
            AND password='$password'";  
        if($err==[]){ 
            $result=executeResult($query);
            if ($result!=null &&count($result)>0) {
                 $token =getPwdSecurity(time().$result[0]['username']);
                 $_SESSION['username'] = $token;
                 $_SESSION['name'] = $username;
                $sql="UPDATE  users set token = '$token' WHERE id =".$result[0]['id'];
                  execute($sql);
            //     mysqli_query($con, $sqlk);

                // Redirect to user dashboard page
                header("Location: index.php");
            } else {
                $err['password']['invalid']="Mật Khẩu bạn nhập không đúng!";
            }
        }              
    } 
    if(isset($_SESSION["username"])){
    header("Location: index.php");
    //die();
    }	
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">

    <!-- CSS Global -->
    <link href="js/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/webfont/css/simple-line-icons.css" rel="stylesheet">
	<link href="fonts/elegantfont/css/elegantfont.css" rel="stylesheet">
    <link href="js/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="js/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="js/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
	 <link href="js/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">

    <link href="css/theme.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/plugins/iesupport/html5shiv.js"></script>
    <script src="js/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">


<!-- Wrap all content -->
<div class="wrapper">

    <!-- TOP LINE -->
	<?php 
	require "./Layout/topline.php"
	?>
    <!-- /TOP LINE -->
	
    <!-- HEADER -->
	<?php 
	require "./Layout/header.php"
	?>
    <!-- /HEADER -->

    <!-- Content area -->
    <div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
    	<h2 class="hidden">breadcrumbs</h2>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login/Register</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE SECTION WITH SIDEBAR -->
    <section class="page-section page-login">
    	<h2 class="hidden">page</h2>
        <div class="container">
            <div class="row"> 
            <div class="login-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="block-title">
						<h2>sign in</h2>
					</div>
					<div class="block-content">
						<p>Hello, Welcome to your account.</p>
						<div class="login-socilal">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<a name="code" class="btn-face" href="#"><i class="fa fa-facebook"></i> Sign In With Facebook</a>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<a class="btn-face" href="#"><i class="fa fa-twitter"></i> Sign In With Twitter</a>
								</div>
							</div>
						</div>
						<div class="form-login-content">
							<form id="form-login" method="POST">
								<div class="form-group">
									<label for="email">User Name<em>*</em></label>
									<input type="text" class="form-control" name="username" id="email" placeholder="user name" autofocus="true"
                                    value="<?php echo(!empty($_POST['username']))?$_POST['username']:false; ?>">
                                    <?php
											echo (!empty($err['username']['required']))?'<span>'.$err['username']['required'].'</span>':false;
											echo (!empty($err['username']['invalid']))?'<span>'.$err['username']['invalid'].'</span>':false;
											?>
								</div>
								<div class="form-group">
									<label for="password">password *</label>
									<input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                    value="<?php echo(!empty($_POST['password']))?$_POST['password']:false; ?>">
                                    <?php
											echo (!empty($err['password']['required']))?'<span>'.$err['password']['required'].'</span>':false;
											echo (!empty($err['password']['invalid']))?'<span>'.$err['password']['invalid'].'</span>':false;
											?>
								</div>
								<div class="form-group remember-forgot">
									<div class="remember-text">
										<input type="checkbox" class="checkbox" id="checkbox"><span>Remember me!</span>
									</div>
									<a href="#" class="forgot">Forgot Your password ?</a>
								</div>
								<div class="form-group">
									<button id="login" name="login" title="track" class="button" type="submit"><span><span>login</span></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- /PAGE SECTION WITH SIDEBAR -->

    </div>
    <!-- /Content area -->

    <!-- FOOTER -->
	<?php 
	require "./Layout/footer.php"
	?>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->


<!-- JS Global -->

<!--[if lt IE 9]><script src="js/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="js/plugins/jquery/jquery-2.1.4.min.js"></script><!--<![endif]-->
<script src="js/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="js/plugins/superfish/js/superfish.min.js"></script>
<script src="js/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>

<script src="js/plugins/jquery.sticky.min.js"></script>
<script src="js/plugins/jquery.easing.min.js"></script>

<!-- JS Page Level -->
<script src="js/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="js/plugins/waypoints/waypoints.min.js"></script>
<script src="js/theme-ajax-mail.js"></script>
<script src="js/theme.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>
<!--<![endif]-->

</body>
</html>
