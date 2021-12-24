<div class="top-line">
        <div class="container">
			<div class="row">
				<div class="top-left col-md-5 col-sm-5 col-xs-5">
				</div>
				<div class="top-right col-md-7 col-sm-7 col-xs-7">
					<div class="header-setting">
						<div class="settting-switcher">
							<div class="dropdown-toggle">
								<div class="text-setting">Hello <?php
											if(isset($_SESSION["username"]) && isset($_SESSION["name"])) {
												echo $_SESSION['name'];
											}
											 ?>
									
								</div>
							</div>
							<div class="dropdown-switcher">
								<div class="top-links-alo">
									<div class="header-top-link">
										<ul class="links">
											<li class="first"><a title="My Account" href="login.html">My Account</a></li>
											<li><a title="My Wishlist" href="wishlist.php">My Wishlist</a></li>
											<li><a title="Ordered" href="#">Ordered</a></li>

											<li><a class="top-link-checkout" title="Checkout" href="checkout.html">Checkout</a></li>
											<li><a title="Testimonial" href="#">Testimonial</a></li>
											<?php
											if(isset($_SESSION["username"]) && isset($_SESSION["name"])){
												echo '<li class=" last"><a title="Log In" href="logout.php">Log Out</a></li>';
											}else{
												echo '<li class=" last"><a title="Log In" href="login.php">Log In</a></li>';
											}
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<ul class="top-links">
						<?php
											if(!isset($_SESSION["username"]) && !isset($_SESSION["name"])){
											    echo '
												<li class="login">
												<a href="login.php">Sign In</a>
											</li>
											<li>
												<span class="or">Or</span>
											</li>
											<li class="first">
												<a title="Register" href="register.php" style="positon:relative;">Register	</a>
											</li>
												 ';
											}
											?>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>