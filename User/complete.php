<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Checkout</title>

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


 <?php include "layout/header.php"; ?>

	<!-- Content area -->
	<div class="content-area">

		<!-- BREADCRUMBS -->
		<section class="page-section breadcrumbs">
			<h2 class="hidden">breadcrumbs</h2>
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Checkout</li>
					<li class="active">Order complete</li>
				</ul>
			</div>
		</section>
		<!-- /BREADCRUMBS -->

		<!-- PAGE SECTION WITH SIDEBAR -->
		<section class="page-section no-padding-top with-sidebar">
			<h2 class="hidden">page</h2>
			<div class="row">
				<div class="container"> 
					<div class ="progress-cart">								
						<div class ="active media">									
							<div class ="heading-tittle">										
								<span>01</span>									
							</div>									
							<div class ="media-content">										
								<span>Shopping Cart</span> 									
							</div>								
						</div>								
						<div class ="media active">									
							<div class ="heading-tittle">										
								<span>02</span>									
							</div>									
							<div class ="media-content">										
								<span>Check Out</span> 									
							</div>								 
						</div>								
						<div class ="media active">									
							<div class ="heading-tittle">										
								<span>03</span>									
							</div>									
							<div class ="media-content">										
								<span>Order Complete</span> 									
							</div>								
						</div>														
					</div>		

					<h1 class="text-center">Your order is complete</h1>
					<br/>
					
				</div>
			</div>
		</section>
		<!-- /PAGE SECTION WITH SIDEBAR -->


		<?php include "layout/footer.php"; ?>

		<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

	</div>
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

<!--[if (gte IE 9)|!(IE)]> -->
<script src="js/plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>
<!--<![endif]-->
</body>
</html>
