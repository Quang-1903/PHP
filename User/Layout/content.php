<!-- content -->
<section class="content col-sm-8 col-md-9">
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
														<a href="wishlist.html"   title="Add to Wishlist" class="link-wishlist"> <i class="icon-heart icons"></i> Add to Wishlist </a>
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
									require_once('../database.php');
									$data = executeResult("Select * FROM sanpham");
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
														<button class="button btn-cart pull-left-none" title="Add to Cart" type="button">
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
																<a class="link-wishlist" title="Add to Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to Wishlist
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="products-textlink clearfix">
												<h2 class="product-name">
													<a title="Name Product" href="detail.html">'."{$data[$i]['TenSP']}".'</a>
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
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                        <!-- /Pagination -->

                    </section>
                    <!-- /content -->