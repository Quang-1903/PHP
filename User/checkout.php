<?php
 session_start();
 require_once '../database.php';
 require_once 'formCheckout.php';
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
					<li><a href="index.html">Home</a></li>
					<li class="active">Checkout</li>
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
						<div class ="media">									
							<div class ="heading-tittle">										
								<span>03</span>									
							</div>									
							<div class ="media-content">										
								<span>Order Complete</span> 									
							</div>								
						</div>														
					</div>		

					<div class ="checkout-step-billing">
						<div class ="row detail">
							<div class ="col-lg-6 col-md-6 col-sm-6 col-xs-12 block">
								<form method="post">
									<input type="hidden" value="dY32yUjLzvsBE0Bj" name="form_key"> 
									<div class ="block-title">
										<h3>billing Details</h3>					
									</div>
									<div class ="block-content">
											<div class="customer-name-middlename">
												<label><em>*</em>Full name</label>
												<div class ="input-box">
													<input required="true" name ="fullname" id="fullname" type ="text" class ="form-control input-text"/>
												</div>
											</div>
										<div class="customer-name-middlename">
											<label>Phone number</label>
											<div class ="input-box">
												<input required="true" name ="phone_number" id="phone_number" onkeypress="return isNumber(event)" type ="number" class ="form-control input-text"/>
											</div>
										</div>
										<div class="customer-name-middlename">
											<label>Email</label>
											<div class ="input-box">
												<input required="true" name ="email" id="email" type ="email" class ="form-control input-text"/>
											</div>
										</div>
										<div class="customer-name-middlename">
											<label><em>*</em>Address</label>
											<div class ="input-box">
												<input required="true" name ="address" id="address" type ="text"  class ="form-control input-text"/>
											</div>
										</div>

									</div>
                                           <button class="button btn-checkout" title="Process to checkout" >
								               <span><span>Complete</span></span>
							                </button> 
								</form> 
							</div> 
							<div class ="col-lg-6 col-md-6 col-sm-6 col-xs-12 block">
								<table class="data-table cart-table" id="shopping-cart-table">
							<thead class="hidden-phone">
								<tr class="first last">
									<th rowspan="1">
										<span class="nobr">ID </span>
									</th> 
									<th colspan="1" >
										<span class="nobr">Name </span>
									</th>
									<th colspan="1" >
										<span class="nobr">Image</span>
									</th>
									<th colspan="1" >
										<span class="nobr">Quantity</span>
									</th>
									<th colspan="1" >
										<span class="nobr">Price</span>
									</th>
									<th colspan="1" >
										<span class="nobr">Total</span>
									</th>
								</tr>
							</thead>
						
							<tbody>
								<?php
       						 $cart=[];
       						 $total=0;
       						 if(isset($_SESSION['cart']))
       						 {
       						 	$cart=$_SESSION['cart'];
       						 }
       						 foreach ($cart as $item ) {
       						 	$total+=$item['SoLuong']*$item['GiaBan'];
       						 	echo '<tr class="first odd">
       						 	    <td>
										<h2 class="product-name"> 
											<a href="#">'.$item['MaSP'].'</a>
										</h2>
									</td>
       						 	    <td>
										<h2 class="product-name"> 
											<a href="#">'.$item['TenSP'].'</a>
										</h2>
									</td>
									<td>
										<a class="product-image" title="Wave Ripped Straight" href="#">
											<img width="120" height="120" alt="Wave Ripped Straight" src="images/preview/shop/'.$item['Anh'].'">
										</a>
									</td>

									<td class="a-left"> 
										<span class="cart-price"> <span class="price">'.$item['SoLuong'].'</span> </span>
									</td>

									<td class="a-left"> 
										<span class="cart-price"> <span class="price">'.$item['GiaBan'].' VND</span> </span>
									</td>
									<td class="a-left a-subtotal"> 
										<span class="cart-price"> <span class="price">'.$item['SoLuong']*$item['GiaBan'].' VND</span>
										</span>
									</td>
								</tr>';
								}
								?>
							</tbody>

						</table>  
							</div> 
						</div>
					</div> 
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
<script>
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
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
