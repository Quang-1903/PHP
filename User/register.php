<?php
						//require('../db.php');	
						require('../database.php');	
						//connectsql();
						          //connectsql();
						          $username=$email=$password=$confirmpassword='';	 
								  $err=[]; 
								// When form submitted, insert values into the database.
								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
									//$captcha = $_POST['g-recaptcha-response'];
									$secret='6Lf652AcAAAAAMOV4wjGyfJl6P1aPBgkhKdfXyc3';
									$reponse = $_POST['g-recaptcha-response'];
									$remoteip=$_SERVER['REMOTE_ADDR'];
									$url="https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$reponse&remoteip=$remoteip";
									$data=file_get_contents($url);
									$row=json_decode($data,true);
									//khai bao mang err de chua loi	
									//echo $row['success'];
									if($row['success']=="false")	{
										//$err['captcha']['required']="Vui lòng xác thực người máy!";
										
									}else{
										$err['capcha']['required']="Vui lòng xac thuc nguoi dung!";
									}			 	
									//validate capcha
										
									//validate username	
									if(empty($_POST["username"])){
										$err['username']['required']="Vui lòng nhập họ tên!";
									}else if(strlen(trim($_POST["username"]))<5){
										$err['username']['min']="Tên phải lớn hơn 5 ký tự";
									}else{
										$username=test_input($_POST["username"]);
										//$username=trim($_POST["username"]);
										//$length = strlen($username);
										//echo $length;
										//die();
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
									// echo '<pre>';
									// print_r($err);
									// echo '<pre>';

										
									$sql = "SELECT *FROM users WHERE username='$username' ";
									//$old=mysqli_query($con,$sql);
									$old=executeResult($sql);
									//mysqli_num_rows($old)>

									if(count($old)>0){
										$nameErr="Tên đã tồn tại ";
										$err['username']['unique']="Tên đã tồn tại!";
									}
									 $create_datetime = date("Y-m-d H:i:s");
									 $password=getPwdSecurity($password);
									//$password=md5($password);
									// echo $password;
									//  die();
									 $query    = "INSERT into users (username, email, password, create_datetime)
									 			VALUES ('$username', '$email', '$password', '$create_datetime')";
									if($err==[]){
										//$result   = mysqli_query($con, $query);
										$result=connectdb($query);
										//echo $result;
										//echo $re;
										//$result   =executeSingleResult($query);
										if ($result==true) {
											
													// các xử lí
													// Tiến hành chuyển hướng
													header("Location: login.php");
													exit;

													// có thể các còn các xử lí khác không được thực hiện.
											
										} else {
											echo "<div class='form'>
												<h3>Required fields are missing.</h3><br/>
												<p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
												</div>";
										}
									}
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
				<div class="login-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="block-title">
						<h2>create a new account</h2>
					</div>
					<div class="block-content">
						<p>Create your own Rimbus account</p>
						<div class="form-creat-content">
									<form id="form-creat" class="form" method="POST">
										<div class="form-group">
											<label for="username">User Name</label> <em>*</em></label>
											<input type="text" class="form-control" name="username" id="email2" placeholder="Username"
											value="<?php echo(!empty($_POST['username']))?$_POST['username']:false; ?>" >
											<?php
											echo (!empty($err['username']['required']))?'<span>'.$err['username']['required'].'</span>':false;
											echo (!empty($err['username']['min']))?'<span>'.$err['username']['min'].'</span>':false;
											echo (!empty($err['username']['unique']))?'<span>'.$err['username']['unique'].'</span>':false;
											?>
											
										</div>
										<div class="form-group">
											<label for="email">Email Adress</label> <em>*</em></label>
											<input type="text" class="form-control" name="email" id="email2" placeholder="Email Adress"
											value="<?php echo(!empty($_POST['email']))?$_POST['email']:false; ?>">
											<?php
											echo (!empty($err['email']['required']))?'<span>'.$err['email']['required'].'</span>':false;
											echo (!empty($err['email']['invalid']))?'<span>'.$err['email']['invalid'].'</span>':false;
											?>
											
										</div>
										<div class="form-group">
											<label for="password">Password</label> <em>*</em></label>
											<input type="password" class="form-control" name="password" id="email2" placeholder="Password" 
											value="<?php echo(!empty($_POST['password']))?$_POST['password']:false; ?>">
											<?php
											echo (!empty($err['password']['required']))?'<span>'.$err['password']['required'].'</span>':false;
											echo (!empty($err['password']['min']))?'<span>'.$err['password']['min'].'</span>':false;
											?>
										</div>
										<div class="form-group">
											<label for="email">Confirm Password</label> <em>*</em></label>
											<input type="password" class="form-control" name="confirmpassword" id="email2" placeholder="Confirm Password" 
											value="<?php echo(!empty($_POST['confirmpassword']))?$_POST['confirmpassword']:false; ?>">
											<?php
											echo (!empty($err['confirmpassword']['required']))?'<span>'.$err['confirmpassword']['required'].'</span>':false;
											echo (!empty($err['confirmpassword']['invalid']))?'<span>'.$err['confirmpassword']['invalid'].'</span>':false;
											?>
										</div>
										<div class="g-recaptcha" data-callback="captchaVerified" data-sitekey="6Lf652AcAAAAAME5jTxAM1ZY6bFF-wN43ZmwhK33">
										</div>
										<?php
											echo (!empty($err['capcha']['required']))?'<span>'.$err['capcha']['required'].'</span>':false;
											?>
										<div class="form-group">
									        <button id="signup" class="button" type="submit" name="submit"><span><span>Register</span></span></button>
								         </div>
									<!--	<input type="submit" name="submit" value="Register" class="login-button"> -->
										<p class="link" style="font-size: 15px;"><a href="login.php">Click to Login</a></p>
									</form>
							<!-- <form id="form-creat" method="post">
								<div class="form-group">
									<label for="email">Email adress <em>*</em></label>
									<input type="text" class="form-control" id="email2" placeholder="Email">
								</div>
								<div class="form-group">
									<button id="signup" name="signup" title="track" class="button" type="submit"><span><span>sign up</span></span></button>
								</div>
							</form> -->
						</div>
						<div class="signup-day">
							<div class="block-title">
								<h2>Sign Up Today And You'll Be Able To</h2>
							</div>
							<ul>
								<li><input type="checkbox" class="checkbox" id="checkbox2"><span>Speed your way through the checkout.</span></li>
								<li><input type="checkbox" class="checkbox" id="checkbox3"><span>Track your orders easily.</span></li>
								<li><input type="checkbox" class="checkbox" id="checkbox4"><span>Keep a record of all your purchases.</span></li>
							</ul>
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
