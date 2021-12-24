 
<!-- Wrap all content -->
<div class="wrapper">
	
	 <!-- Newsletter -->
        <div class="subscribe-me">
            <a href="#close" class="sb-close-btn">x</a>
            <div id="popup-newsletter">
				<div class="block-content">
					<div class="form-subscribe-header block-title">
						<label for="newsletter">newsletter</label>
					</div>
					<span>Subscribe now to get</span>
					<span class="saleoff">20%</span>
					<span>off on any product!</span>

					<div class="newsletter-new clearfix">
					<form method="post" action="Layout/checkSubcribe.php">
						<div class="input-box">
						   <input type="email" placeholder="Your email adress ..." class="input-text required-entry validate-email" title="Sign up for our newsletter" id="subcribe" name="subcribe">
						</div>
						<div class="actions">
							<button class="button" title="Subscribe" type="submit"><span>Subscribe</span></button>
						</div>
					</form>
					</div>

					<div class="subscribe-bottom">
						<input type="checkbox">Don’t show this popup again 
					</div>
				</div>
            </div>
        </div>
	
     <!-- Login popup -->
    <!-- /Login popup -->

    <!-- TOP LINE -->

    <!-- /TOP LINE -->
	
    <!-- HEADER -->
	
    <header class="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="content-seach col-md-4 col-sm-4 col-xs-12">
						<div class="header-search">
							<form method="get" id="search_mini_form">
								<div class="form-search clearfix">
									<!-- <label for="search">Search</label>
									<button class="button" title="Search" type="submit"><span><span><i aria-hidden="true" data-icon="U" class="fs1"></i></span></span></button>
									<input type="search" placeholder="Search here..." maxlength="128" class="input-text required-entry" value="" name="search" id="search" autocomplete="off"> -->
								</div>
							</form>
						</div>
					</div>
					<div class="content-logo col-md-4 col-sm-4 col-xs-12">
						<div class="header-logo">
							<h1 class="logo">
								<a href="index.php" class="scroll-to"><img alt="ALO Themes" src="images/logo/logo.png" class="img-responsive"></a>
							</h1>
						</div>
					</div>
					<?php
		    $cart=[];
            if(isset($_SESSION['cart'])){
		    $cart=$_SESSION['cart'];
           }
           $count=0;
           $price=0;
          foreach ($cart as $item) {
          	$count += $item['SoLuong'];
          	$price+= $item['SoLuong']*$item['GiaBan'];
          }
		  ?>
					<div class="content-cart menu-mobile col-md-4 col-sm-4 col-xs-12">
						<!-- Mobile menu toggle button-->
						<a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
						<!-- /Mobile menu toggle button-->
						<div class="miniCartWrap pull-right">
							<div class="mini-maincart">
								<div class="cartSummary">
									<div class="crat-icon">
										<span class="icon_cart_alt"></span>
										<span class="zero"><?=$count?> </span>
										<p class="mt-cart-title">My Cart</p>
									</div>
									<div class="cart-header">
										<p class="cart-tolatl">
											<span><span class="price"><?=$price?> VND</span></span>
										</p>
									</div>	
								</div>
								<div class="mini-contentCart">
									<div class="block-content">
										<p class="block-subtitle">Recently added item(s)</p>
										<ol class="mini-products-list clearfix" id="cart-sidebar">
											<?php
											foreach ($cart as $item) {
   
											echo '<li class="item clearfix">
												<div class="cart-content-top">
													<a class="product-image" title="Wave Ripped Straight" href="#">
														<img width="60" height="77" alt="Wave Ripped Straight" src="images/preview/shop/'.$item['Anh'].'">
													</a>
													<div class="product-details">
													<p class="product-name"><a href="detail.html">'.$item['TenSP'].'</a></p>
													<strong>'.$item['SoLuong'].'</strong> x<span class="price">'.$item['GiaBan'].'</span>                                
													</div>
												</div>
												<div class="cart-content-bottom">
													<div class="clearfix">
														<button class="btn btn-danger" onclick="deleteToCart(\''.$item['MaSP'].'\')">Delete</button>
													</div>
												</div>
											</li>';
											}
											?>
										</ol>

										<p class="subtotal">
											<span class="label">Subtotal:</span> <span class="price"><?=$price?> VND</span>
										</p>
										<div class="actions">
											<a class="view-cart" href="cart.php">View cart </a>
											<a  class="checkout btn-call-checkout" href="checkout.html">Checkout </a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header header-sticky">
			<div class="container">
				<div class="header-wrapper clearfix">
					<!-- Navigation -->
					<nav class="navigation closed clearfix">
						<a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
						<ul class="sf-menu nav">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li class="megamenu">
								<a href="left_sidebar.php">Category</a>
								<ul>
									<li class="row">
										<!---->
										<div class="col-md-2 col-item">
											 <?php 
													echo'<h4 class="block-title" href="left_sidebar.php?gioitinh='."nu".'">Womens</h4>';?>
											<ul>
												<?php 
									require_once('../database.php');
									$data = executeResult("Select DISTINCT loaisp.Loai,loaisp.MaLoai from loaisp,sanpham WHERE loaisp.MaLoai=sanpham.Loai");
									for ($i=0; $i < count($data); $i++){
										echo '<li><a href="left_sidebar.php?
										gioitinh='."Nu".'&loai='."{$data[$i]['MaLoai']}".'">'."{$data[$i]['Loai']}".'</a></li>';
                                    }
								?>
											</ul>
										</div>
										<!---->
										<!---->
										<div class="col-md-2 col-item">
											<?php 
													echo'<h4 class="block-title" href="left_sidebar.php?gioitinh='."nam".'">Men</h4>';?>
											<ul>
												<?php 
									require_once('../database.php');
									$data = executeResult("Select DISTINCT loaisp.Loai,loaisp.MaLoai from loaisp,sanpham WHERE loaisp.MaLoai=sanpham.Loai");
									for ($i=0; $i < count($data); $i++){
										echo '<li><a href="left_sidebar.php?
										gioitinh='."Nam".'&loai='."{$data[$i]['MaLoai']}".'">'."{$data[$i]['Loai']}".'</a></li>';
                                    }
								?>
											</ul>
										</div>
										<!---->
										<!---->
										<div class="col-md-2 col-item col-menu-right">
											<a href="images/preview/menu/img-mega.jpg" ><img alt="images" src="images/preview/menu/img-mega.jpg" /></a>
										</div>
										<!---->

									</li>
								</ul>
							</li>
							<li>
								<a href="page-left-sidebar.html">Shop</a>
								
								<ul>
									<li><a href="cart.php">Cart</a></li>
									<li><a href="wishlist.php">Wishlist</a></li>
									<li><a href="track-oder.html">Track Oder</a></li>
								</ul>
							</li>
							<li>
								<a href="blogfull.php">Blog</a>
								
							</li>
							<li>
								<a href="#">Page</a>
								<ul>
									<li><a href="about.html">About</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="404.html">404 Page</a></li>
									<li><a href="login.html">Login Page</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<!-- /Navigation -->

				</div>
			</div>
        </div>
    </header>
    <!-- /HEADER -->

    		
