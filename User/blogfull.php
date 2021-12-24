<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

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
<!-- Wrap all content -->
<div class="wrapper">

     <!-- Login popup -->
    <div class="modal fade popup-login" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                        <form action="#" method="post" >
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="popup-login-email">Email</label>
										<input id="popup-login-email" type="text" class="form-control"/>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="popup-login-password">Password</label>
										<input id="popup-login-password" type="password" class="form-control"/>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-sm-12">
									<label><input type="checkbox"> Remember me</label> <br class="clear"/>
									<a class="link" href="#">Forgot password?</a>
								</div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button" data-dismiss="modal"><span>login</span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login popup -->


    <!-- Content area -->
    <div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
    	<h2 class="hidden">breadcrumbs</h2>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE SECTION WITH SIDEBAR -->
    <section class="page-section no-padding-top with-sidebar">
    	<h2 class="hidden">sidebar</h2>
        <div class="container">
            <div class="row">

                <!-- content -->
                <section id="content" class="content col-sm-12 col-md-12">
					<h2 class="hidden">content</h2>
					<?php
						require_once('../database.php');
						$data = executeResult("Select * FROM blog");
						for ($i=0; $i < count($data); $i++){
						  echo '<article class="post-wrap">
						  <div class="post-media">
						  	<div class="owl-carousel img-carousel">
						  	  <div class="item"><img class="img-responsive" src="images/preview/blog/'."{$data[$i]['AnhBlog']}".'" alt="images"/></div>
						  	  <div class="item"><img class="img-responsive" src="images/preview/blog/'."{$data[$i]['AnhBlog']}".'" alt="images"/></div>

						  	</div>

						  </div>
						  <div class="post-header">
						    <div class="post-date">
								<div class="postDetails">
									<div class="number"><span>'."{$data[$i]['ThoiGian']}".'</span></div>
								</div>
							</div>
                            <h2 class="post-title"><a href="blog-single.html">'."{$data[$i]['TieuDe']}".'</a></h2>
                            <div class="post-meta">'."{$data[$i]['NgPost']}".'</span></div>
						  </div>
						  <div class="post-body">
                            <div class="post-excerpt">
                                <p>'."{$data[$i]['NoiDung']}".'</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <span class="post-read-more"><a href="blog-single.html" class="btn btn-theme btn-theme-red">Read more</a></span>
                        </div>
						  	
						  </article>
						  	
						  ';
						}

						
					?>

                   

                    <!-- /Blog posts -->

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

                

            </div>
        </div>
    </section>
    <!-- /PAGE SECTION WITH SIDEBAR -->

    </div>
    <!-- /Content area -->

    <!-- FOOTER -->
    <?php include "layout/footer.php"; ?>
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

