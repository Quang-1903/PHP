<?php
 session_start();
  require_once("../pagesize.php");
  require_once('../database.php');
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
                    <li class="active">Category</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE SECTION WITH SIDEBAR -->
        <section class="page-section with-sidebar no-padding-top">
        	<h2 class="hidden">page</h2>
            <div class="container">
                <div class="row">
					<div class="category-img container">
						<img class="img-responsive" title="Shop" alt="Shop" src="images/preview/shop/category/imges-cate.jpg">
					</div>
					<!-- sidebar -->
                    <aside class="sidebar col-sm-4 col-md-3">
						
						<div class="widget-menu">
							<div class="block block-anav">
								<div class="block-title">
									<strong><span>Categories</span></strong>
								</div>
								<div class="header-search">
							<form method="get" id="search_mini_form">
								<div class="form-search clearfix">
									<button class="button" title="Search" type="submit"><span><span><i aria-hidden="true" data-icon="U" class="fs1"></i></span></span></button>
									<input type="search" placeholder="Search here..." maxlength="128" class="input-text required-entry" value="" name="search" id="search" autocomplete="off">
								
								</div>
							</form>
							<button class="speech" >
										<i class="fas fa-microphone"></i>
									</button>
						</div>
								<div id="menu-left">
									<ul class="nav-accordion">
										<li class="has-sub">

											<ul class="toggle-content">
												<li><a href="left_sidebar.php"><span>Tất cả các sản phẩm </span></a></li>
												<li>
													<?php 
													echo'<a href="left_sidebar.php?gioitinh='."nam".'"><span>Men</span></a>';
													?>
													<ul class="toggle-content">
														<?php 
									$data = executeResult("Select DISTINCT loaisp.Loai,loaisp.MaLoai from loaisp,sanpham WHERE loaisp.MaLoai=sanpham.Loai");
									for ($i=0; $i < count($data); $i++){
										echo '<li><a href="left_sidebar.php?
										gioitinh='."Nam".'&loai='."{$data[$i]['MaLoai']}".'">'."{$data[$i]['Loai']}".'</a></li>';
                                    }
								?>
													</ul>
												</li>
												<li>
													<?php 
													echo'<a href="left_sidebar.php?gioitinh='."Nu".'"><span>Women</span></a>';
													?>
													<ul class="toggle-content">
														<!-- <li><a href="#"><span>Men</span></a></li> -->
														<?php 
									$data = executeResult("Select DISTINCT loaisp.Loai,loaisp.MaLoai from loaisp,sanpham WHERE loaisp.MaLoai=sanpham.Loai");
									for ($i=0; $i < count($data); $i++){
										echo '<li><a href="left_sidebar.php?
										gioitinh='."Nu".'&loai='."{$data[$i]['MaLoai']}".'">'."{$data[$i]['Loai']}".'</a></li>';
                                    }
								?>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="block block-layered-nav">
							<div class="block-title">
								<strong><span>Shop By</span></strong>
							</div>
							<div class="block-content">
								<dl id="narrow-by-list">
									<div class="narrow-box">
										<dt class="even">Price</dt>
										<span class="toggle-tab mobile" style="display: none;"></span>
										<dd class="even toggle-content">
											<div id="slider-range"></div>
											<div class ="input-box slider_range">
												
                                                <input type="number" onkeypress="return isNumber(event)" class ="input-text" id="amount" /> 
												<input type="number" onkeypress="return isNumber(event)" class ="input-text" id="amount_right"/>
												<a href="" id="fromto"><button class="btn btn-theme btn-theme-red" onclick="myFunction()">Lọc theo giá</button></a> 
											</div>
										</dd>
									</div>
								</dl>
							</div>
						</div>

                        <div class="widget widget-tag-cloud block">
							<div class="block-title">
								<strong><span>Tags</span></strong>
							</div>
                            <ul>
                            	<?php 
									$data = executeResult("Select Distinct TenSP from sanpham");
									for ($i=0; $i < count($data); $i++){
								
										echo
										'
										<button style="margin-top:10px">
										<a href="left_sidebar.php?search='."{$data[$i]['TenSP']}".'"  >'."{$data[$i]['TenSP']}".'</a>
										</button>
										</br>
										';
                                    }
								?>
                            </ul>
                        </div>
                    </aside>

                    <!-- /sidebar -->
                    <!-- / phần hiển thị sản phẩm -->
					
						<section class="content col-sm-8 col-md-9 fix">
						<div class="row shop-sorting">
                            <div class="col-sm-12">
                                <form class="form-inline">
                                    <div class="form-group selectpicker-wrapper">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Sắp xếp
                                            <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a <?php
                                                    if(isset($_GET['search']) && $_GET['search']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?search='.$_GET['search'].'&order=ASC"';
                                                    }elseif (isset($_GET['gioitinh']) && $_GET['gioitinh']!='' && isset($_GET['loai']) && $_GET['loai']!='') {
                                                    	echo 'href="left_sidebar.php?gioitinh='.$_GET['gioitinh'].'&loai='.$_GET['loai'].'&order=ASC"';
                                                    }elseif(isset($_GET['gioitinh']) && $_GET['gioitinh']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?gioitinh='.$_GET['gioitinh'].'&order=ASC"';
                                                    }elseif(isset($_GET['loai']) && $_GET['loai']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?loai='.$_GET['loai'].'&order=ASC"';
                                                    }
                                                    else{
                                                    	echo 'href="left_sidebar.php?order=ASC"';
                                                    }
                                                        ?>>Gía tăng</a></li>
                                                    <li><a <?php
                                                    if(isset($_GET['search']) && $_GET['search']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?search='.$_GET['search'].'&order=DESC"';
                                                    }elseif (isset($_GET['gioitinh']) && $_GET['gioitinh']!='' && isset($_GET['loai']) && $_GET['loai']!='') {
                                                    	echo 'href="left_sidebar.php?gioitinh='.$_GET['gioitinh'].'&loai='.$_GET['loai'].'&order=DESC"';
                                                    }elseif(isset($_GET['gioitinh']) && $_GET['gioitinh']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?gioitinh='.$_GET['gioitinh'].'&order=DESC"';
                                                    }elseif(isset($_GET['loai']) && $_GET['loai']!='')
                                                    {
                                                    	echo 'href="left_sidebar.php?loai='.$_GET['loai'].'&order=DESC"';
                                                    }
                                                    else{
                                                    	echo 'href="left_sidebar.php?order=DESC"';
                                                    }
                                                        ?>>Gía giảm</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=" thumbnails products-list">
                        <div class="row thumbnails products">
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
							<?php
                    //phan trang

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

                     $sql= 'select count(MaSP) as number from sanpham';
                     $result = executeResult($sql);

               
                     //var_dump($result);
               
                     if( $result !=null && count($result)>0)
                       {
                           $count= $result[0]['number'];
                       }
                     $number = ceil($count/$limit);

				     //OKE
                     if(isset($_GET['search']) && $_GET['search']!=''){
                        if(isset($_GET['order']) && $_GET['order']!='')
                        {
                     	$sql='select * FROM sanpham WHERE TenSP like "%'.$_GET['search'].'%" ORDER BY GiaBan '.$_GET['order'].'';
                        }
                        else
                        {
                        $sql='select * FROM sanpham WHERE TenSP like "%'.$_GET['search'].'%"';
                        }
                     }
                     elseif(isset($_GET['gioitinh']) && $_GET['gioitinh']!='' && isset($_GET['loai']) && $_GET['loai']!=''){
                        if(isset($_GET['order']) && $_GET['order']!='')
                        {
                     	$sql='select * FROM sanpham WHERE GioiTinh ="'.$_GET['gioitinh'].'" AND Loai="'.$_GET['loai'].'"ORDER BY GiaBan '.$_GET['order'].'';
                        }
                        else
                        {
                        	$sql='select * FROM sanpham WHERE GioiTinh ="'.$_GET['gioitinh'].'" AND Loai="'.$_GET['loai'].'"';
                        }
                     }

                     //OKE
                     elseif(isset($_GET['gioitinh']) && $_GET['gioitinh']!=''){
                     	if(isset($_GET['order']) && $_GET['order']!='')
                     	{
                     		$sql='select * FROM sanpham WHERE GioiTinh = "'.$_GET['gioitinh'].'"ORDER BY GiaBan '.$_GET['order'].'';
                     	}
                     	else
                     	{
                     		$sql='select * FROM sanpham WHERE GioiTinh = "'.$_GET['gioitinh'].'"';
                     	}
                     
                     }
                     //OKE
                     elseif (isset($_GET['loai']) && $_GET['loai']!='') {
                     	if(isset($_GET['order']) && $_GET['order']!='')
                     	{
                     		$sql='select * FROM sanpham,loaisp WHERE loaisp.MaLoai=sanpham.Loai AND loaisp.Loai like "%'.$_GET['loai'].'%" ORDER BY GiaBan '.$_GET['order'].'';
                     	}
                     	else
                     	{
                     		$sql='select * FROM sanpham,loaisp WHERE loaisp.MaLoai=sanpham.Loai AND loaisp.Loai like "%'.$_GET['loai'].'%"';
                     	}
                     
                     }
                     //NOTOKE
                     elseif (isset($_GET['from']) && $_GET['from']!='' && isset($_GET['to']) && $_GET['to']!='') {
                     	if(isset($_GET['order']) && $_GET['order']!='')
                     	{
                     		$sql='select * FROM sanpham WHERE GiaBan BETWEEN '.$_GET['from'].' AND '.$_GET['to'].'ORDER BY GiaBan '.$_GET['order'].'';
                     	}
                     	else
                     	{
                     		$sql='select * FROM sanpham WHERE GiaBan BETWEEN '.$_GET['from'].' AND '.$_GET['to'].'';
                     	}
                     }
                     //OKE
                     else
                     {
                     	    if(isset($_GET['order']) && $_GET['order']!='')
                            {
	                        $sql = 'select * FROM sanpham  ORDER BY GiaBan '.$_GET['order'].' limit '.$index.','.$limit.'';
                     	    }
                     	    else
                     	    {
                     	    $sql = 'select * FROM sanpham limit '.$index.','.$limit.'';
                     	    }
                     		
                     }
                     $data = executeResult($sql);
                     // $count = executeResult('select count(sanpham.Loai) FROM sanpham,loaisp WHERE loaisp.MaLoai=sanpham.Loai AND loaisp.Loai like "%'.$_GET['loai'].'%" GROUP BY sanpham.Loai ');
                     // if($count > 4) {
                     // 	echo'<h1>AAA</h1>';
                     //}
									for ($i=0; $i < count($data); $i++){
										echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xsp-12">
										<div class="item">
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
								</div>
								</div>';
                                    }
								?>

                            
                        </div>

                        <!-- Pagination -->
                        <!-- /Pagination -->

                    </section>
                    <!-- /content -->
                </div>
            </div>
        </section>
        <div class="pagination-wrapper">
                            <div class="row">
                     <?=paginarion($number,$page,'')?>
             </div>
                        </div>
        <!-- /PAGE SECTION WITH SIDEBAR -->

        
		
		 <section class="page-section support-page" id="support">
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

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>

<!-- /Wrap all content -->
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
<!-- JS Global -->

<!--[if lt IE 9]><script src="js/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="js/plugins/jquery/jquery-2.1.4.min.js"></script><!--<![endif]-->
<script src="js/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="js/plugins/superfish/js/superfish.min.js"></script>
<script src="js/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="js/plugins/jquery.easing.min.js"></script>
<script src="js/plugins/jquery.sticky.min.js"></script>
<script src="js/plugins/accordion/js/magicaccordion.js"></script>
<!-- JS Page Level -->
<script src="js/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="js/plugins/waypoints/waypoints.min.js"></script>
<script src="js/plugins/jquery/jquery-ui-1.11.1.min.js"></script>

<script src="js/theme-ajax-mail.js"></script>
<script src="js/theme.js"></script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>
<!--<![endif]-->

<script type="text/javascript">
	    jQuery(document).ready(function($) {
	      $(function() {
	        jQuery( "#slider-range" ).slider({
	            range: true,
	            min: 0,
	            max: 500,
	            values: [ 75, 300 ],
	            slide: function( event, ui ) {
	                jQuery( "#amount" ).val( "$" + ui.values[ 0 ] );
	                jQuery( "#amount_right" ).val( "$" + ui.values[ 1 ] );
	            }
	        });
	        jQuery( "#amount" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) );
			jQuery( "#amount_right" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 1));
	    });  
		/*
        $(".nav-accordion").magicaccordion({
            accordion:true,
            speed: 400,
            closedSign: 'collapse',
            openedSign: 'expand',
            easing: 'easeInOutQuad'
        });
		*/
    });
</script>
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
<p id="demo"></p>
</body>
</html>
<script type="text/javascript">
$('.link-view').click(function(){
	console.log($(this).data('id'))
	$('.product-name-info').text('Tên sản phẩm : '+$(this).find('span').data('name'))
	$('.price-info').text('Gía sản phẩm : '+$(this).find('span').data('price'))
	$('.availability-info').text('Tình trạng : '+$(this).find('span').data('available'))
	$('.short-description-info').text('Mô tả sản phẩm : '+$(this).find('span').data('des'))
	$('.item-info').attr({"src":`images/preview/shop/${$(this).find('span').data('image')}`})

	
});
const fix = document.querySelector('.fix');
const fixTop = fix.offsetTop;
document.querySelector('body').onload = function(){
	window.scrollBy(0,fixTop-60);
};
function myFunction(){
  var x = document.getElementById("amount").value;
  var y = document.getElementById("amount_right").value;
  if (x > y ){
      alert("Bạn đã nhập sai yêu cầu về giá !!!");
  } 
  else if(x<0 || y<0)
  {
  	alert("Bạn đã nhập giá trị âm !!!");
  }
  else
  {
  document.querySelector('#fromto').setAttribute("href",`left_sidebar.php?from=${x}&to=${y}`);
  document.getElementById("demo").innerHTML = x;
  }
}
</script>

<script>
	
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition
        const recognition = new SpeechRecognition();
        
recognition.interimResults = true;
        recognition.lang = "vi-VI";
        recognition.continuous = false;
        recognition.addEventListener('result', e => {
            console.log(e);
            const transcript = Array.from(e.results)
                .map(result => result[0])
                .map(result => result.transcript)
                .join('');
                console.log(transcript);
                $('#search').val(transcript);
            })
$('.speech').click(()=>{
	recognition.start()
})
 recognition.addEventListener('end', e => {
            recognition.stop();
            $('#search_mini_form').submit(function(){return true;});
        })
        recognition.addEventListener('error', e => {
           
        })
</script>
