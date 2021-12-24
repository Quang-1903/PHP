<?php
  session_start();
 require('../database.php');	
 
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

    <title>Home Page</title>

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
    <link href="js/plugins/animate/css/animate.css" rel="stylesheet">
    <link href="js/plugins/subscribe-newletter/css/subscribe-better.css" rel="stylesheet">

    <link href="css/theme.css" rel="stylesheet">
    <link href="css/slider/slide.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/plugins/iesupport/html5shiv.js"></script>
    <script src="js/plugins/iesupport/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" class="wide">

<?php require "./Layout/topline.php"; ?>
    <?php include "layout/header.php"; ?>

    <!-- Content area -->
    <div class="content-area">

        <div id="main">
        <!-- SLIDER -->
        <section class="page-section no-padding">
        	<h2 class="hidden">slider</h2>
            <div class="container full-width">
            <div id="main-slider" class="owl-carousel owl-theme">

                <!-- Slide 1 -->
                <div class="item page slide1">
                    <img class="slide-img" src="images/preview/slider/home1/slide-1.jpg" alt="slide1"/>
                    <div class="bx-caption start play">
						<div class="container">
							<div class="text-slide">
								<h3 class="caption1">new</h3>
								<h3 class="caption2">fashion</h3>
								<h3 class="caption3"><strong>&amp;</strong>style</h3>
							</div>
						</div>						
					</div>
                </div>

                <!-- Slide 2 -->
                <div class="item page slide2">
                    <img class="slide-img" src="images/preview/slider/home1/slide-2.jpg" alt="slide2"/>
                    <div class="bx-caption  start play">
						<div class="container">
							<div class="text-slide text-slide2">
								<h3 class="caption1">Lookbook</h3>
								<h3 class="caption2">real man</h3>
							</div>
						</div>						
					</div>
                </div>

                <!-- Slide 3 -->
                <div class="item page slide3">
                    <img class="slide-img" src="images/preview/slider/home1/slide-3.jpg" alt="slide3"/>
                    <div class="bx-caption play start">
						<div class="container">
							<div class="text-slide text-slide2">
								<h3 class="caption1">spring</h3>
								<h3 class="caption2">collection</h3>
							</div>
						</div>						
					</div>
                </div>

            </div>

            </div>
        </section>
        <!-- /SLIDER -->
        </div>
		
		<!-- PAGE BANNER -->
		<section id="block-banner">
			<h2 class="hidden">banner</h2>
			<div class="container">
				<div class="row">
					<div class="pa-lines container ">
						<div class="banner1 banner-inner size1of9">
							<div class="banner1-1">
								<div class="banner-inner-mall size1of3 text-right fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content">
										<div class="column column-1-1">
											<div class="box-text">
												<h4>sale off</h4>
												<h3>accessories</h3>
												<p>Watch Collection 2016</p>
											</div>
										</div>
									</div>
								</div>
								<div class="banner-inner-mall size1of3 fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content">
										<div class="column al-style-2 column-1-2">
											<a href="#"><img src="images/preview/banner/banner1.jpg" alt="Banner" class="img-responsive-normal"> </a>
										</div>
									</div>
								</div>
								<div class="banner-inner-big size1of3 no-margin fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content border">
										<div class="column-normal column-1-3">
											<div class="box-text">
												<h4>march 2016</h4>
												<h3>lookbook &amp; women</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="banner1-2">
								<div class="banner-inner-big size1of3 fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content">
										<div class="column-normal column-1-4">
											<a href="#"><img src="images/preview/banner/banner2.jpg" alt="Banner" class="img-responsive-normal"> </a>
											<div class="box-text box-text-possion">
												<h4>colection</h4>
												<h3>men</h3>
												<h3>jackets</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="banner-inner-mall size1of3 text-right fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content">
										<div class="column column-1-5">
											<div class="box-text">
												<h4>NEW ARRIVALS</h4>
												<h3>FOR KIDS</h3>
												<p>Collection March 2016</p>
											</div>
										</div>
									</div>
								</div>
								<div class="banner-inner-mall size1of3 no-margin fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="banner-inner-content">
										<div class="column al-style-2 column-1-6">
											<a href="#"> <img src="images/preview/banner/banner3.jpg" alt="Banner" class="img-responsive-normal"> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="banner2 banner-inner size1of3 fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
							<div class="banner-inner-content">
								<a href="#"><img src="images/preview/banner/banner4.jpg" alt="Banner" class="img-responsive-normal"> </a>
								<div class="box-text box-text-possion">
									<h4>colection</h4>
									<h3>Jackets</h3>
									<h3>for</h3>
									<h3>women</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- FEATURED PRODUCT -->
		<section class="page-section" id="featuresproduct">
			<h2 class="hidden">featuresproduct</h2>
			 <!-- Popup product quick view -->
                <div class="modal fade popup-product-view" id="popup-product-view" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="container">
                        <div class="modal-content">

                            <div class="extended_product_page" id="extended_product_page">
                                <div class="modal-header" style="margin-top: 30px">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h2 class="modal-title">Retro Spring Woman Dress</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="row product-single blocks">
                                        <div class="col-lg-5 col-md-4 col-sm-5 col-xsp-6">
                                        	<img class="img-responsive item-info" src="images/preview/shop/zoom/zoom1.jpg" alt="images"/>
 <!--                                            <div class="block">
                                                <div class="owl-carousel product-img-carousel">
                                                    <div class="item"><img class="img-responsive item-info" src="images/preview/shop/zoom/zoom1.jpg" alt="images"/></div> 
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="product-shop col-md-7 col-sm-7 col-xs-12">
										<div class="product-shop-content">
											<div class="product-name-info">
												<h2>Fusce nec facilisi</h2>
											</div>
											<p class="no-rating">
												<a href="#">Be the first to review this product</a>
											</p>
											<div class="product-type-data">
												<div class="price-box"> 
													<span class="regular-price" > 
														<span class="price-info">$79.00</span>
													</span>
												</div>
												<p class="availability-info in-stock">Availability: <span>In stock</span></p>
											</div>
											<div class="short-description-info">
												Quisque sollicitudin nulla felis, vel sollicitudin felis mollis in. Cras mauris ligula, pharetra a consectetur a, interdum sit amet ex. Nunc dui nulla, efficitur a tempor non, euismod id libero. Quisque sapien enim, tempus tristique metus ut, ves...
											</div>
											<div class="product-options-wrapper">
												<div class="option-view">
													<span>Color:</span>
													<select class="required-entry super-attribute-select">
														<option value="">- Select color -</option>
														<option value="4" data-label="blue">Blue</option>
														<option value="5" data-label="orange">Orange</option>
														<option value="7" data-label="white">white</option>
												  </select>
												</div>
												<div class="option-view">
													<span>Size:</span>
													<select class="required-entry super-attribute-select">
														<option value="">- Select size -</option>
														<option value="4"   data-label="s">S</option>
														<option value="5"   data-label="xl">XL</option>
														<option value="7"   data-label="xs">XS</option>
												  </select>
												</div>
											</div>
											<div class="product-options-bottom">
												<div class="product-qty"> 
													<label for="qty">Qty:</label>
													<div class="custom-qty">
														<button  type="button" class="reduced items" onclick="var result = document.getElementById('qty');   var qty = result.value;  if (!isNaN(qty) && qty > 1)result.value--; return false;"> <i class="fa fa-minus-square-o"></i> </button> 
														<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" /> 
														<button  type="button" class="increase items" onclick="var result = document.getElementById('qty');   var qty = result.value;  if (!isNaN(qty)) result.value++;return false;"> <i class="fa fa-plus-square-o"></i> </button>
													</div>
												</div>
												<div class="add-to-cart"> 
													<button type="button" onclick="window.location.href='cart.html'" title="Add to Cart" class="button btn-cart">
														<span> <span class="view-cart">Add to Cart</span> </span>
													</button>
												</div>
												<ul class="add-to-links">
													<li> 
														<a href="wishlist.php"   title="Add to Wishlist" class="link-wishlist"> <i class="icon-heart icons"></i> Add to Wishlist </a>
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
            <div class="container">
				<div class="features">
					<ul class="nav nav-tabs fadeInUp alo-animate" role="tablist">
						<li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Top Sale Products</a></li>
						<li role="presentation"><a href="#new_product" aria-controls="new_product" role="tab" data-toggle="tab">New Products</a></li>
						<li role="presentation"><a href="#sale_product" aria-controls="sale_product" role="tab" data-toggle="tab">Sale Products</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s">
						<div role="tabpanel" class="tab-pane active " id="featured">
							<div id="featured-product" class="owl-carousel owl-theme">
								<?php 
									require_once('../database.php');
									$data = executeResult(" Select * FROM sanpham , (SELECT MaSP, SUM(SoLuong) as SL FROM `chitiethoadon` GROUP BY 
									MaSP ORDER BY SUM(SoLuong) DESC) A WHERE sanpham.MaSP= A.MaSP 
ORDER BY SL DESC ");
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
						<div role="tabpanel" class="tab-pane" id="new_product">
							<div id="new-product" class="owl-carousel owl-theme">
								<?php 
									require_once('../database.php');
									
									$data = executeResult("Select * from sanpham order by NgayNhap desc limit 8");
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
															<li class="link-view pull-left-none"> 
																<a data-target="#popup-product-view" data-toggle="modal" href="#"><i class="fa fa-search"></i>Quick View</a>
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
						<div role="tabpanel" class="tab-pane" id="sale_product">
							<div id="sale-product" class="owl-carousel owl-theme">
								<?php 
									require_once('../database.php');
									$data = executeResult("Select * FROM sanpham LIMIT 8 OFFSET 7");
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
															<li class="link-view pull-left-none"> 
																<a data-target="#popup-product-view" data-toggle="modal" href="#"><i class="fa fa-search"></i>Quick View</a>
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
			</div>
		</section>
		
        <!-- PAGE Testimonials -->
        <section class="page-section block-testimonials fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s" id="testimonials">
        	<h2 class="hidden">testimonials</h2>
            <div class="container">
				<div class="testimonials-content">
					<div id="testimonials-slider" class="owl-carousel owl-theme">
						<div class="item">
							<div class="customer">
								<img title="images" alt="images" src="images/preview/testimonial/testimonial1.png" class="avatar" />
							</div>
							<div class="testimonial_text">
								<span class="sub-text">
									“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium” 
								</span>
								<p class="title-name">Michael Lee</p>
								<p class="name">Creative Designer</p>								
							</div>
						</div>
						<div class="item">
							<div class="customer">
								<img title="images" alt="images" src="images/preview/testimonial/testimonial2.png" class="avatar" />
							</div>
							<div class="testimonial_text">
								<span class="sub-text">
									“Quisque faucibus enim non tempus gravida. Morbi non sem sagittis, venenatis neque at, consequat justo. Cras dignissim, nunc sit amet cur” 
								</span>
								<p class="title-name">Michael Lee</p>
								<p class="name">Creative Designer</p>								
							</div>
						</div>
						<div class="item">
							<div class="customer">
								<img title="images" alt="images" src="images/preview/testimonial/testimonial3.jpg" class="avatar" />
							</div>
							<div class="testimonial_text">
								<span class="sub-text">
									“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium” 
								</span>
								<p class="title-name">Michael Lee</p>
								<p class="name">Creative Designer</p>								
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- /PAGE Testimonials -->
		
		
		
        <!-- PAGE Blog -->
        <section class="page-section blog fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s" id="blog-page">
        	<h2 class="hidden">blog</h2>
            <div class="container">
				<div class="blog-content">
					<div class="block-title">
						<h3 class="section-title">
							<span>Latest Blog</span>
							<span class="hr"></span>
						</h3>
					</div>
					<div id="slide-blog" class="owl-carousel owl-theme">
						<?php
					 require_once '../database.php';

					 $result= executeResult('select * from blog limit 5');
                     foreach($result as $row)
                     {
						echo'<div class="item">
							<div class="postcontent">
								<div class="blog-image al-style-2 image-container">
									<a href="blog.html">
										<img alt="imgBlog" src="images/preview/blog/'.$row['AnhBlog'].'" class="img-responsive">
									</a>
								</div>
								<div class="blog_short_text">
									<div class="blog_text">
										<div class="post-date">
										   <span>'.$row['ThoiGian'].'</span>
										</div>
										<a href="#"><span class="title">'.$row['TieuDe'].'</span></a>
										<a href="blog.html" class="read-more-blog">Read more<i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
						</div>';
					 }
						?>
					</div>
				</div>
            </div>
        </section>
        <!-- /PAGE Blog -->
		
		 <!-- PAGE Brand -->
        <section class="page-section latest-blog no-padding-bottom fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s" id="brand">
        	<h2 class="hidden">Brand</h2>
            <div class="container">
                <div class="partners-carousel">
                    <div class="owl-carousel" id="partners"> 
                        <div><a href="#"><img src="images/preview/partners/brands1.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands2.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands3.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands4.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands5.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands6.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands7.jpg" alt="images"/></a></div>
                        <div><a href="#"><img src="images/preview/partners/brands8.jpg" alt="images"/></a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section support-page fadeInUp alo-animate" data-wow-duration="1s" data-wow-delay="0.4s" id="support">
        	<h2 class="hidden">policy</h2>
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

    </div>
    <!-- /Content area -->
    <?php include "layout/footer.php"; ?>
<!-- /Wrap all content -->

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
<script src="js/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="js/plugins/superfish/js/superfish.min.js"></script>
<script src="js/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="js/plugins/jquery.sticky.min.js"></script>
<script src="js/plugins/jquery.easing.min.js"></script>
<script src="js/plugins/animate/js/animate.js"></script>
<script src="js/plugins/subscribe-newletter/js/jquery.subscribe-better.js"></script>

<!-- JS Page Level -->
<script src="js/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="js/plugins/waypoints/waypoints.min.js"></script>
<script src="js/theme-ajax-mail.js"></script>
<script src="js/theme.js"></script>
`
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>
<!--<![endif]-->
<script>
new WOW().init();
$('.link-view').click(function(){
	console.log($(this).data('id'))
	$('.product-name-info').text('Tên sản phẩm : '+$(this).find('span').data('name'))
	$('.price-info').text('Gía sản phẩm : '+$(this).find('span').data('price'))
	$('.availability-info').text('Tình trạng : '+$(this).find('span').data('available'))
	$('.short-description-info').text('Mô tả sản phẩm : '+$(this).find('span').data('des'))
	$('.item-info').attr({"src":`images/preview/shop/${$(this).find('span').data('image')}`})

	
})
</script>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCuF3H_37BvdEHWouXrquPE9izY1n0lOI0",
    authDomain: "milano-f9667.firebaseapp.com",
    projectId: "milano-f9667",
    storageBucket: "milano-f9667.appspot.com",
    messagingSenderId: "1075374116749",
    appId: "1:1075374116749:web:8057f78b43c16f419837c4",
    measurementId: "G-HVE6Z7ZFRD"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

</body>
</html>
								