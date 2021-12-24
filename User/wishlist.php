<?php
session_start();
require('../database.php');
require('./wishlistphp.php');
require_once("../pagesize.php");
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

	<title>Wishlist</title>

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

		<!-- Login popup -->
		<!-- /Login popup -->

		<!-- TOP LINE -->
		<?php require "./Layout/topline.php"; ?>
		<!-- /TOP LINE -->

		<!-- HEADER -->
		<?php require "./Layout/header.php"; ?>
		<!-- /HEADER -->

		<!-- Content area -->
		<div class="content-area">

			<!-- BREADCRUMBS -->
			<section class="page-section breadcrumbs">
				<h2 class="hidden">breadcrumbs</h2>
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Wishlist</li>
					</ul>
				</div>
			</section>
			<!-- /BREADCRUMBS -->

			<!-- PAGE SECTION WITH SIDEBAR -->
			<section class="page-section no-padding-top with-sidebar wishlist-page">
				<h2 class="hidden">page</h2>
				<div class="row">
					<div class="container">
						<div class="title-page">
							<h2>wishlist</h2>
						</div>
						<form method="post" action="#">
							<input type="hidden" value="dY32yUjLzvsBE0Bj" name="form_key">

							<table class="data-table cart-table" id="whishlist-table">
								<thead class="hidden-phone">
									<tr class="first last">
										<th rowspan="1">
											<span class="nobr">Name</span>
										</th>
										<th rowspan="1">
											<span class="nobr">Product ID</span>
										</th>
										<th rowspan="1">
											<span class="nobr">Image</span>
										</th>
										<th class="nobr" rowspan="1">
											<span class="nobr">Price</span>
										</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($_SESSION['name'])) {

										//phan trang
										$c_id = $_SESSION['name'];
										$limit=6;
										$page=1;
										if(isset($_GET['page']))
										   {
											 $page = $_GET['page'];
										   }
										if($page <=0)
										   {
											 $page=1;
										   }
										$index=($page-1)*$limit;
										$sql= "select count(id) as number from wishlist  where uid ='$c_id' ";
										$result = executeResult($sql);
								  
										//var_dump($result);
								  
										if( $result !=null && count($result)>0)
										  {
											  $count= $result[0]['number'];
										  }
										$number = ceil($count/$limit);
			
										//$sql_Check = "SELECT * FROM sanpham JOIN wishlist on sanpham.MaSP=wishlist.pid where uid ='$c_id' limit 8";
										$sql_Check = "SELECT *FROM sanpham,wishlist  WHERE  sanpham.MaSP=wishlist.pid and uid ='$c_id' limit ".$index.",".$limit;
										$result = executeResult($sql_Check);
										if (count($result) > 0) {
											foreach ($result as $row) {
												echo '
												<tr class="first odd">
												<td>
													<p class="product-name"> 
														<a href="detail.html">' . $row['TenSP'] . '</a>
													</p>
												</td>
												<td >
													<p class="product-name"> 
														<a href="detail.html">' . $row['pid'] . '</a>
													</p>	 
												</td>
												
												
												<td>
													<a class="product-image" title="Wave Ripped Straight" href="detail.php?search=' . "{$row['MaSP']}" . '">
														<img width="120"style:"margin:0" height="120" alt="Wave Ripped Straight" src="images/preview/shop/' . $row['Anh'] . '">
													</a>
												</td>
												<td > 
													<span class="cart-price"> <span class="price">' . $row['GiaBan'] . '$</span> </span>
												</td>
												<td><button class="btn btn-danger" onclick="deleteWL(' . $row['id'] . ')">Delete</button></td>
												</tr>';
											}
										} else {

											echo '<script language="javascript">';
											echo 'alert("Bạn chưa có sản phẩm nào trong Wishlist")';
											echo '</script>';
										}
									}
									?>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</section>
			<!-- /PAGE SECTION WITH SIDEBAR -->
			<div class="pagination-wrapper">
                            <div class="row">
                      <?=paginarion($number,$page,'')?> 
             </div>
                        </div>
        <!-- /PAGE SECTION WITH SIDEBAR -->


			<!-- FOOTER -->
			<?php require "./Layout/footer.php"; ?>
			<!-- /FOOTER -->

			<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

		</div>
	</div>
	<script type="text/javascript">
		function deleteWL(id) {

			option = confirm('Bạn có muốn sản phẩm mã ' + id + ' khỏi wishlist không? ');
			//console.log(masp);
			if (!option) {
				return;
			}
			$.post('deleteWishlist.php', {
				'id': id
			}, function(data) {
				location.reload();
			})
		}
	</script>
	<!-- /Wrap all content -->

	<!-- JS Global -->
	<!--[if lt IE 9]><script src="js/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!-->
	<script src="js/plugins/jquery/jquery-2.1.4.min.js"></script>
	<!--<![endif]-->
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