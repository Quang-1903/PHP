<?php
session_start();
  require_once("../pagesize.php");
  require_once('../database.php');
?>
<?php
require_once("../database.php");
  
  $Content='';
  $Rate = '5';
  $search = $_GET['search'];
  if(isset($_POST['Content'])){
    $Content= $_POST['Content'];
  }

  if( $Content!=='' && isset($_GET['search']) && $_GET['search']!='' && isset($_SESSION['name'])!='')
  {
    //insert
        $sql= 'insert into reviews(Id,MaSP,username,Content,Time,Rate) values (default,"'.$_GET['search'].'","'.$_SESSION['name'].'","'.$Content.'",default,"'.$Rate.'")';
        execute($sql);
        header("Location: detail.php?search=".$search);
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

        <title>Product Detail</title>

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
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


</head>
<body id="home" class="wide">
	<?php require "layout/topline.php"; ?>
<?php include "layout/header.php"; ?>
	<!-- Content area -->
	<div class="content-area">

		<!-- BREADCRUMBS -->
		<section class="page-section breadcrumbs">
			<h2 class="hidden">breadcrumbs</h2>
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="page-left-sidebar.html">Shop</a></li>
					<li class="active">Product Name</li>
				</ul>
			</div>
		</section>
		<!-- /BREADCRUMBS -->

		<!-- PAGE SECTION WITH SIDEBAR -->
		<section class="page-section no-padding-top with-sidebar">
			<h2 class="hidden">page</h2>
			<!-- Popup product quick view -->
                <div class="modal fade popup-product-view" id="popup-product-view" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="container">
                        <div class="modal-content">

                            <div class="extended_product_page" id="extended_product_page">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h2 class="modal-title">Retro Spring Woman Dress</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="row product-single blocks">
                                        <div class="col-lg-5 col-md-4 col-sm-5 col-xsp-6">
                                            <div class="block">
                                                <div class="owl-carousel product-img-carousel">
                                                    <div class="item"><a href="images/preview/shop/zoom/zoom1.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="images/preview/shop/zoom/zoom1.jpg" alt="images"/></a></div>
                                                    <div class="item"><a href="images/preview/shop/zoom/zoom2.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="images/preview/shop/zoom/zoom2.jpg" alt="images"/></a></div>
                                                    <div class="item"><a href="images/preview/shop/zoom/zoom3.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="images/preview/shop/zoom/zoom3.jpg" alt="images"/></a></div>
													 <div class="item"><a href="images/preview/shop/zoom/zoom4.jpg" data-gal="prettyPhoto"><img class="img-responsive" src="images/preview/shop/zoom/zoom4.jpg" alt="images"/></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-8 col-sm-7 col-xsp-6">
                                            <div class="block">
                                                <div class="product-rating clearfix">
                                                    <span class="rating">
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </span>
                                                    <a href="#">2 reviews</a> / <a href="#">Add a Review</a>
                                                </div>
                                                <div class="product-price">$154.00</div>
                                                <div class="product-qty">
                                                    <form action="#" class="form-inline">
                                                        <div class="form-group"><label>Qty:</label><input class="form-control qty" value="1" type="text"></div>
                                                        <button type="submit" class="btn btn-theme btn-theme-md">Add to cart</button>
                                                    </form>
                                                </div>
                                                <p>Aliquam hendrit rutrum iaculis nullam ondimentum maluada velit beum donec sit amet tristique erosam amet risus mollis malesuada nulla. Vestibulum ante ipsum primis in faucibus orcluctus et ultrices. Vestibulum ante ipsum primis in faucibus.</p>
                                                <ul class="list">
                                                    <li><i class="fa fa-check-square-o"></i>Porttitor euismod pharetra</li>
                                                    <li><i class="fa fa-check-square-o"></i>Amet massa posuere pretium vestibulum.</li>
                                                    <li><i class="fa fa-check-square-o"></i>Vestibulum ante ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-theme" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
                <!-- Popup product quick view -->
			<div class="row">
				<div class="container"> 
					<div class="product-view">
						<div class="product-essential">
							<?php 
							if(isset($_GET['search']) && $_GET['search']!=''){
                            $sql='select * FROM sanpham WHERE MaSP like "%'.$_GET['search'].'%"';
                              }
                            $data = executeResult($sql);
                            for ($i=0; $i < count($data); $i++){
							echo'
							<div class="row">
								<form action="#" method="post" id="product_addtocart_form"> 
									<input name="form_key" type="hidden" value="GWhHUIrsfG2rwJmb" />
									<div class="no-display"> 
										<input type="hidden" name="product" value="13" /> <input type="hidden" name="related_product" id="related-products-field" value="" />
									</div>
									<div class="product-img-box clearfix col-md-5 col-sm-5 col-xs-12">
										<div class="product-img-content">
											<div class="product-image product-image-zoom">
												<div class="product-image-gallery"> 
													<span class="sticker top-left"> <span class="labelnew">New</span> </span>  
													<img  id ="image-main" data-zoom-image ="images/preview/shop/'."{$data[$i]['Anh']}".'" class="gallery-image visible  img-responsive item-info" src="images/preview/shop/'."{$data[$i]['Anh']}".'" alt="Fusce nec facilisi" title="Fusce nec facilisi"  /> 
												</div>
											</div>
											<div class="more-views">
												<div class="product-image-thumbs owl-carousel viewMore_img" id ="gal_01">
													<div class ="item"><a class="thumb-link" data-image="images/preview/shop/zoom/zoom1.jpg" data-zoom-image ="images/preview/shop/zoom/zoom1.jpg" href="#" title="" > <img class="img-responsive" src="images/preview/shop/'."{$data[$i]['Anh_hover']}".'" alt="images" /> </a></div>
													
													
												</div>

											</div>
										</div>
									</div> 

									<div class="product-shop col-md-7 col-sm-7 col-xs-12">
										<div class="product-shop-content">
											<div class="product-name-info">
												<h2>'."{$data[$i]['TenSP']}".'</h2>
											</div>
											<p class="no-rating">
												<a href="#">Be the first to review this product</a>
											</p>
											<div class="product-type-data">
												<div class="price-box"> 
													<span class="regular-price" > 
														<span class="price-info">'."{$data[$i]['GiaBan']}".'</span>
													</span>
												</div>
												<p class="availability in-stock">Availability: <span>'."{$data[$i]['TinhTrang']}".'</span></p>
											</div>
											<div class="short-description-info">
												'."{$data[$i]['MoTa']}".'
											</div>
											
											<div class="product-options-bottom">
												
												<div class="add-to-cart"> 
													<button type="button" title="Add to Cart" class="button btn-cart" onclick="addToCart(\''.$data[$i]['MaSP'].'\')">
														<span> <span class="view-cart">Add to Cart</span> </span>
													</button>
												</div>
												<ul class="add-to-links">
													<li> 
														<a href="wishlist.php?addwl='."{$data[$i]['MaSP']}".'"   title="Add to Wishlist" class="link-wishlist"> <i class="icon-heart icons"></i> Add to Wishlist </a>
													</li>
													<li>
														<a href="#" class="link-compare" title="Add to Compare"> <i class="icon-bar-chart icons"></i> Add to Compare </a>
													</li>
													<li>
														<a href="#" class="link-compare" title="Add to Compare"><i class="fa fa-envelope-o"></i> Email to a Friend </a>
													</li>
												</ul>
											</div>
											<div class="share_this">
												<h2>share this:</h2>
												<ul class="list-inline">
													<li><a class="social-link twitter" href="#"><i class="fa fa-twitter"><span class="hidden">twitter</span></i></a></li>
													<li><a class="social-link google-plus" href="#"><i class="fa fa-google-plus"><span class="hidden">google-plus</span></i></a></li>
													<li><a class="social-link facebook" href="#"><i class="fa fa-facebook"><span class="hidden">facebook</span></i></a></li>
													<li><a class="social-link tumblr" href="#"><i class="fa fa-tumblr"><span class="hidden">tumblr</span></i></a></li>
													<li><a class="social-link pinterest" href="#"><i class="fa fa-pinterest"><span class="hidden">pinterest</span></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>' ;}
							?>


							<div class="product-wapper-tab clearfix">
								<div class="tabs-wrapper content-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
										<li><a href="#tag" data-toggle="tab">Add Tag</a></li>
										<li><a href="#description" data-toggle="tab">Description</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade" id="description">
											<p><span class="drop-cap">P</span>hasellus vitae mauris justo. Proin erat urna, semper nec ullamcorper semper, adipiscing in purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis placerat eget libero non pretium. In discere repudiandae vel, est no tempor lucilius, te graeco atomorum per. Quo te agam menandri scriptorem, dicta soluta altera nec ei. Vix minim nihil et, cu vidisse scaevola conceptam eum. Per an labores fabellas. Nobis oblique id sit.</p>
											<p>Nam case oratio nusquam et, id eum omnesque prodesset. Vel ad iusto ludus maluisset. Graeco inimicus ut sed, ne habeo omnium tractatos pro, sit choro admodum eu. Ex his numquam admodum, adhuc percipit sit ut, molestie necessitatibus eam in. At populo referrentur has, sit suas veritus ne, blandit deserunt ius te.</p>
										</div>

										<?php 
									require_once('../database.php');
									if(isset($_GET['search']) && $_GET['search']!=''){

			$data = executeResult('Select *,DATE_FORMAT(Time,"%d-%m-%Y") as Time2 FROM reviews WHERE MaSP like "%'.$_GET['search'].'%" ORDER BY Time DESC ');
								        } 
									for ($i=0; $i < count($data); $i++){

										echo '<div class="tab-pane fade in active" id="reviews">
											<div class="media">
												<a class="pull-left" href="#">
													<img class="img-profile rounded-circle" src="images/undraw_profile.svg">
												</a>
												<div class="media-body">
													<h4 class="media-heading"><a href="#">'."{$data[$i]['username']}".'</a></h4>
													<p class="post-date">'."{$data[$i]['Time2']}".'</p>
													<pre> '."{$data[$i]['Content']}".' </pre>
												</div>
											</div>';
                                    }
								?>

											<hr/>

											<h3>Add a Review</h3>
											<!-- // -->
											<form action="" name="ez-form-add-review" method="post" class="row" id="ez-form-add-review">
												<div class="col-sm-12">
													<div class="form-group">
														<label for="input-message">Your Review</label>
														<textarea name="Content" id="Content" placeholder="" rows="4" cols="50" class="form-control placeholder"></textarea>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group-off"> 
														<?php 
														if(!isset($_SESSION['name'])){
                                                        echo'<button onclick="myFunction()" > <a href="login.php" target="_blank"> Submit </a> </button>';}
                                                        else {
                                                        echo '<input type="submit" name="submit" class="btn btn-theme" id="submit_btn" value="Submit">';
                                                        }
														?>
													</div>
												</div>

											</form>
											<!-- // -->
											<!-- <script type="text/javascript">
	$(function() {
  $('#Content').summernote();
});

</script> -->

										</div>
										 <div class="tab-pane fade" id="tag">  
											<form action="#" id="addTagForm" method="get">
												<div class="form-add"> 
													<label for="productTagName">Add Your Tags:</label>
													<div class="input-box"> 
														<input type="text" class="input-text required-entry" name="productTagName" id="productTagName" />
													</div> 
													<button type="button" title="Add Tags" class="button" onclick="submitTagForm()"> 
														<span> <span>Add Tags</span> </span> 
													</button>
												</div>
											</form>
											<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p> 
										</div>
									</div>
								</div>
							</div> 
						</div>
					</div>
					<div class ="related_product upsell_product">
					<div class ="block-title">
						<h3>
							<span class="title-top">Products</span>
						</h3>
					</div>
					<div id="featured-product" class="owl-carousel owl-theme">
						<?php 
									require_once('../database.php');
									$data = executeResult('Select * FROM sanpham WHERE Loai in (Select Loai FROM sanpham WHERE MaSP = "'.$_GET['search'].'")');

									for ($i=0; $i < count($data); $i++){
										echo '<div class="item">
									<div class="product-item">
										<div class="per-product">
											<div class="images-container">
												<div class="product-hover">
													<span class="sticker top-left"><span class="labelnew">New</span></span>  
													<span class="sticker top-right"><span class="labelsale">Sale</span></span>
													<a href="#" class="overlay"></a>
													<a class="product-image" href="detail.html">
														<img width="280" height="357" alt="The Net Bag in Navy" src="images/preview/shop/'."{$data[$i]['Anh']}".'" class="img-responsive" />
														<span class="product-img-back">
															<img width="280" height="357" alt="The Net Bag in Navy" src="images/preview/shop/'."{$data[$i]['Anh_hover']}".'" class="img-responsive" />
														</span>
													</a>
												</div>
												<div class="actions-no hover-box">
													<div class="actions">
														<button class="button btn-cart pull-left-none" title="Add to Cart" type="button" onclick="addToCart(\''.$data[$i]['MaSP'].'\')">
															<span><i class="icon_cart_alt"></i><span>Add to Cart</span></span>
														</button>
														<ul class="add-to-links pull-left-none">
															<li class="link-view pull-left-none" data-id="'."{$data[$i]['MaSP']}".'"> 
																<span hidden
																data-name='."'{$data[$i]['TenSP']}'".'
																data-price='."'{$data[$i]['GiaBan']}'".'
																data-available='."'{$data[$i]['TinhTrang']}'".'
																data-des='."'{$data[$i]['MoTa']}'".'
																data-image='."'{$data[$i]['Anh']}'".'
																></span>
																<a  data-target="#popup-product-view" data-toggle="modal" href="#"><i class="fa fa-search show-info"></i>Quick View</a>
															</li>
															<li class="pull-left-none">
																<a class="link-wishlist" title="Add to Wishlist" href="wishlist.php?addwl='."{$data[$i]['MaSP']}".'"><i class="fa fa-heart-o"></i>Add to Wishlist
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="products-textlink clearfix">
												<h2 class="product-name">
													<a title="Name Product" href="detail.php?search='."{$data[$i]['MaSP']}".'">'."{$data[$i]['TenSP']}".'</a>
												</h2>
												<div class="price-box">
													<span class="regular-price">
														<span class="price">'."{$data[$i]['GiaBan']}".'</span>                                   
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>';
                                    }
								?>
					</div>
				   </div>
				    <div class ="upsell_product">
					<div class ="block-title">
						<h3>
							<span class="title-top">Upsell Products</span>
						</h3>
					</div>
					<div id="sale-product" class="owl-carousel owl-theme">
						<?php 
									require_once('../database.php');
									$data = executeResult("Select * FROM sanpham LIMIT 8 OFFSET 3");
									for ($i=0; $i < count($data); $i++){
										echo '<div class="item">
									<div class="product-item">
										<div class="per-product">
											<div class="images-container">
												<div class="product-hover">
													<span class="sticker top-left"><span class="labelnew">New</span></span>  
													<span class="sticker top-right"><span class="labelsale">Sale</span></span>
													<a href="#" class="overlay"></a>
													<a class="product-image" href="detail.html">
														<img width="280" height="357" alt="The Net Bag in Navy" src="images/preview/shop/'."{$data[$i]['Anh']}".'" class="img-responsive" />
														<span class="product-img-back">
															<img width="280" height="357" alt="The Net Bag in Navy" src="images/preview/shop/'."{$data[$i]['Anh_hover']}".'" class="img-responsive" />
														</span>
													</a>
												</div>
												<div class="actions-no hover-box">
													<div class="actions">
														<button class="button btn-cart pull-left-none" title="Add to Cart" type="button" onclick="addToCart(\''.$data[$i]['MaSP'].'\')">
															<span><i class="icon_cart_alt"></i><span>Add to Cart</span></span>
														</button>
														<ul class="add-to-links pull-left-none">
															<li class="link-view pull-left-none" data-id="'."{$data[$i]['MaSP']}".'"> 
																<span hidden
																data-name='."'{$data[$i]['TenSP']}'".'
																data-price='."'{$data[$i]['GiaBan']}'".'
																data-available='."'{$data[$i]['TinhTrang']}'".'
																data-des='."'{$data[$i]['MoTa']}'".'
																data-image='."'{$data[$i]['Anh']}'".'
																></span>
																<a  data-target="#popup-product-view" data-toggle="modal" href="#"><i class="fa fa-search show-info"></i>Quick View</a>
															</li>
															<li class="pull-left-none">
																<a class="link-wishlist" title="Add to Wishlist" href="wishlist.php?addwl='."{$data[$i]['MaSP']}".'"><i class="fa fa-heart-o"></i>Add to Wishlist
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="products-textlink clearfix">
												<h2 class="product-name">
													<a title="Name Product" href="detail.php?search='."{$data[$i]['MaSP']}".'">'."{$data[$i]['TenSP']}".'</a>
												</h2>
												<div class="price-box">
													<span class="regular-price">
														<span class="price">'."{$data[$i]['GiaBan']}".'</span>                                   
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>';
                                    }
								?>
					</div>
				    </div>
				</div>
			</div>
		</section>
		<!-- /PAGE SECTION WITH SIDEBAR -->
		<section class="page-section support-page" id="support">
			<h2 class="hidden">page</h2>
			<div class="container">
				<div class="support-policy">
					<div class="support-footer-inner row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="row-normal clearfix">
								<div class="col-icon">
									<div class="support-icon square-round"><i class="icon-plane icons"><span class="hidden">hidden</span></i></div>
								</div>
								<div class="col-text">
									<div class="support-info">
										<div class="info-title">FREE SHIPPING WORLDWIDE</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="row-normal clearfix">
								<div class="col-icon">
									<div class="support-icon square-round"><i class="icon-earphones-alt icons"><span class="hidden">hidden</span></i></div>
								</div>
								<div class="col-text">
									<div class="support-info">
										<div class="info-title">24/7 CUSTOMER SERVICE</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="row-normal clearfix">
								<div class="col-icon">
									<div class="support-icon square-round"><i class="icon-users icons"><span class="hidden">hidden</span></i></div>
								</div>
								<div class="col-text">
									<div class="support-info">
										<div class="info-title">Member Discount</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /FOOTER -->

		<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

	</div>
</div>
	<!-- /Wrap all content -->
 <?php include "layout/footer.php"; ?>
	<!-- JS Global -->
<script type="text/javascript">
   	function addToCart(id) {
		$.post('apiProducts.php',{
           'action':'add',
           'id':id
		},function(data){
			//console.log(data)
			location.reload();
		})
	}

    function deleteToCart(id) {
		$.post('apiProducts.php',{
           'action':'delete',
           'id':id
		},function(data){
			//console.log(data)
			location.reload();
		})
	}
  </script>
<!--[if lt IE 9]><script src="js/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="js/plugins/jquery/jquery-2.1.4.min.js"></script><!--<![endif]-->
<script src="js/plugins/modernizr.custom.js"></script>
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
<script src="js/plugins/elevateZoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="js/theme.js"></script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>

<!--<![endif]-->
<script>
new WOW().init();
$('.link-view').click(function(){
	console.log($(this).data('id'))
	$('.product-name-info').text('Tên sản phẩm : '+$(this).find('span').data('name'))
	$('.price-info').text('Gía sản phẩm : '+$(this).html())
	$('.availability-info').text('Tình trạng : '+$(this).find('span').data('available'))
	$('.short-description-info').text('Mô tả sản phẩm : '+$(this).find('span').data('des'))
	$('.item-info').attr({"src":`images/preview/shop/${$(this).find('span').data('image')}`})

	
})
</script>
<script>
function myFunction() {
  alert("Hello! Bạn phải đăng nhập!!!");
}
</script>
</body>
</html>
