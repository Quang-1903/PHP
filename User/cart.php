<?php
	session_start();
	if(isset($_POST['update']))
	{
		$cart1=[];
		if(isset($_SESSION['cart']))
		{
               $cart1=$_SESSION['cart'];
			for ($i=0; $i < count($cart1); $i++) {
				if ($_POST["SoLuong".$cart1[$i]["MaSP"]]>=1) {
					$_SESSION['cart'][$i]["SoLuong"]=$_POST["SoLuong".$cart1[$i]["MaSP"]];
					
				}	
			}
		}
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

        <title>Cart</title>

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
					<li class="active">Cart</li>
				</ul>
			</div>
		</section>
		<!-- /BREADCRUMBS -->

		<!-- PAGE SECTION WITH SIDEBAR -->
		<section class="page-section no-padding-top with-sidebar">
			<h2 class="hidden">sidebar</h2>
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
						<div class ="media">									
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
					<form method="post" action="#" method="post"> 
						<input type="hidden" value="dY32yUjLzvsBE0Bj" name="form_key">

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
									<th></th>
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

									<td class="a-center">
										<div class="custom-qty clearfix"> 
											<a  class="minus is-form alo_qty alo_qty_dec">
												<i class="fa fa-minus-square-o"></i>
											</a> 
											<input maxlength="12" class="input-text qty input-qty" size="4" max="10" min="1" value="'.$item['SoLuong'].'" name="SoLuong'.$item['MaSP'].'">
											<a  class="alo_qty alo_qty_inc">
												<i class="plus is-form fa fa-plus-square-o"></i>
											</a>
											
										</div>
									</td>

									<td class="a-left"> 
										<span class="cart-price"> <span class="price">'.$item['GiaBan'].' VND</span> </span>
									</td>
									<td class="a-left a-subtotal"> 
										<span class="cart-price"> <span class="price">'.$item['SoLuong']*$item['GiaBan'].'</span>
										</span>
									</td>
								    <td><button class="btn btn-danger" onclick="deleteToCart(\''.$item['MaSP'].'\')">Delete</button></td>
								</tr>';
								}
								?>
							</tbody>
							<button class="button btn-update" title="Update Shopping Cart" value="update_qty" name="update" type="submit">
								<span><span>Update Cart</span></span>
							</button> 
						</table>  
						<script type="text/javascript">decorateTable('shopping-cart-table')</script> 
					</form>
					<div class="cart-collaterals row">
						<div class="col2-set">
							<div class="col-1-old col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="shipping">
									<h2>Estimate Shipping and Tax</h2>
									<div class="shipping-form">
										<form id="shipping-zip-form" method="post" action="#"> 
											<ul class="form-list">
												<li> 
													<label class="required" for="country"><em>*</em>Country</label>
													<div class="input-box"> 
														<select title="Country" class="validate-select" id="country" name="country_id">
															<option value="">Choose Country</option>
															<option value="AF">Afghanistan</option>
															<option value="AX">Åland Islands</option>
															<option value="AL">Albania</option>
															<option value="DZ">Algeria</option>
															<option value="AS">American Samoa</option>
															<option value="AD">Andorra</option>
															<option value="AO">Angola</option>
															<option value="AI">Anguilla</option>
															<option value="AQ">Antarctica</option>
															<option value="AG">Antigua and Barbuda</option>
															<option value="AR">Argentina</option>
															<option value="AM">Armenia</option>
															<option value="AW">Aruba</option>
															<option value="AU">Australia</option>
															<option value="AT">Austria</option>
															<option value="AZ">Azerbaijan</option>
															<option value="BS">Bahamas</option>
															<option value="BH">Bahrain</option>
															<option value="BD">Bangladesh</option>
															<option value="BB">Barbados</option>
															<option value="BY">Belarus</option>
															<option value="BE">Belgium</option>
															<option value="BZ">Belize</option>
															<option value="BJ">Benin</option>
															<option value="BM">Bermuda</option>
															<option value="BT">Bhutan</option>
															<option value="BO">Bolivia</option>
															<option value="BA">Bosnia and Herzegovina</option>
															<option value="BW">Botswana</option>
															<option value="BV">Bouvet Island</option>
															<option value="BR">Brazil</option>
															<option value="IO">British Indian Ocean Territory</option>
															<option value="VG">British Virgin Islands</option>
															<option value="BN">Brunei</option>
															<option value="BG">Bulgaria</option>
															<option value="BF">Burkina Faso</option>
															<option value="BI">Burundi</option>
															<option value="KH">Cambodia</option>
															<option value="CM">Cameroon</option>
															<option value="CA">Canada</option>
															<option value="CV">Cape Verde</option>
															<option value="KY">Cayman Islands</option>
															<option value="CF">Central African Republic</option>
															<option value="TD">Chad</option>
															<option value="CL">Chile</option>
															<option value="CN">China</option>
															<option value="CX">Christmas Island</option>
															<option value="CC">Cocos (Keeling) Islands</option>
															<option value="CO">Colombia</option>
															<option value="KM">Comoros</option>
															<option value="CG">Congo - Brazzaville</option>
															<option value="CD">Congo - Kinshasa</option>
															<option value="CK">Cook Islands</option>
															<option value="CR">Costa Rica</option>
															<option value="CI">Côte d’Ivoire</option>
															<option value="HR">Croatia</option>
															<option value="CU">Cuba</option>
															<option value="CY">Cyprus</option>
															<option value="CZ">Czech Republic</option>
															<option value="DK">Denmark</option>
															<option value="DJ">Djibouti</option>
															<option value="DM">Dominica</option>
															<option value="DO">Dominican Republic</option>
															<option value="EC">Ecuador</option>
															<option value="EG">Egypt</option>
															<option value="SV">El Salvador</option>
															<option value="GQ">Equatorial Guinea</option>
															<option value="ER">Eritrea</option>
															<option value="EE">Estonia</option>
															<option value="ET">Ethiopia</option>
															<option value="FK">Falkland Islands</option>
															<option value="FO">Faroe Islands</option>
															<option value="FJ">Fiji</option>
															<option value="FI">Finland</option>
															<option value="FR">France</option>
															<option value="GF">French Guiana</option> 
															<option value="PF">French Polynesia</option>
															<option value="TF">French Southern Territories</option>
															<option value="GA">Gabon</option>
															<option value="GM">Gambia</option>
															<option value="GE">Georgia</option>
															<option value="DE">Germany</option>
															<option value="GH">Ghana</option>
															<option value="GI">Gibraltar</option>
															<option value="GR">Greece</option>
															<option value="GL">Greenland</option>
															<option value="GD">Grenada</option>
															<option value="GP">Guadeloupe</option>
															<option value="GU">Guam</option>
															<option value="GT">Guatemala</option>
															<option value="GG">Guernsey</option>
															<option value="GN">Guinea</option>
															<option value="GW">Guinea-Bissau</option>
															<option value="GY">Guyana</option>
															<option value="HT">Haiti</option>
															<option value="HM">Heard &amp; McDonald Islands</option>
															<option value="HN">Honduras</option>
															<option value="HK">Hong Kong SAR China</option>
															<option value="HU">Hungary</option>
															<option value="IS">Iceland</option>
															<option value="IN">India</option><option value="ID">Indonesia</option>
															<option value="IR">Iran</option><option value="IQ">Iraq</option>
															<option value="IE">Ireland</option>
															<option value="IM">Isle of Man</option>
															<option value="IL">Israel</option>
															<option value="IT">Italy</option>
															<option value="JM">Jamaica</option>
															<option value="JP">Japan</option>
															<option value="JE">Jersey</option>
															<option value="JO">Jordan</option>
															<option value="KZ">Kazakhstan</option>
															<option value="KE">Kenya</option>
															<option value="KI">Kiribati</option>
															<option value="KW">Kuwait</option>
															<option value="KG">Kyrgyzstan</option>
															<option value="LA">Laos</option>
															<option value="LV">Latvia</option>
															<option value="LB">Lebanon</option>
															<option value="LS">Lesotho</option>
															<option value="LR">Liberia</option>
															<option value="LY">Libya</option>
															<option value="LI">Liechtenstein</option>
															<option value="LT">Lithuania</option>
															<option value="LU">Luxembourg</option>
															<option value="MO">Macau SAR China</option>
															<option value="MK">Macedonia</option>
															<option value="MG">Madagascar</option>
															<option value="MW">Malawi</option>
															<option value="MY">Malaysia</option>
															<option value="MV">Maldives</option>
															<option value="ML">Mali</option>
															<option value="MT">Malta</option>
															<option value="MH">Marshall Islands</option>
															<option value="MQ">Martinique</option>
															<option value="MR">Mauritania</option>
															<option value="MU">Mauritius</option>
															<option value="YT">Mayotte</option>
															<option value="MX">Mexico</option>
															<option value="FM">Micronesia</option>
															<option value="MD">Moldova</option>
															<option value="MC">Monaco</option>
															<option value="MN">Mongolia</option>
															<option value="ME">Montenegro</option>
															<option value="MS">Montserrat</option>
															<option value="MA">Morocco</option>
															<option value="MZ">Mozambique</option>
															<option value="MM">Myanmar (Burma)</option>
															<option value="NA">Namibia</option>
															<option value="NR">Nauru</option>
															<option value="NP">Nepal</option>
															<option value="NL">Netherlands</option>
															<option value="AN">Netherlands Antilles</option>
															<option value="NC">New Caledonia</option>
															<option value="NZ">New Zealand</option>
															<option value="NI">Nicaragua</option>
															<option value="NE">Niger</option>
															<option value="NG">Nigeria</option>
															<option value="NU">Niue</option>
															<option value="NF">Norfolk Island</option>
															<option value="MP">Northern Mariana Islands</option>
															<option value="KP">North Korea</option>
															<option value="NO">Norway</option>
															<option value="OM">Oman</option><option value="PK">Pakistan</option>
															<option value="PW">Palau</option>
															<option value="PS">Palestinian Territories</option>
															<option value="PA">Panama</option>
															<option value="PG">Papua New Guinea</option>
															<option value="PY">Paraguay</option>
															<option value="PE">Peru</option>
															<option value="PH">Philippines</option>
															<option value="PN">Pitcairn Islands</option>
															<option value="PL">Poland</option>
															<option value="PT">Portugal</option>
															<option value="PR">Puerto Rico</option>
															<option value="QA">Qatar</option>
															<option value="RE">Réunion</option>
															<option value="RO">Romania</option>
															<option value="RU">Russia</option>
															<option value="RW">Rwanda</option>
															<option value="BL">Saint Barthélemy</option>
															<option value="SH">Saint Helena</option>
															<option value="KN">Saint Kitts and Nevis</option>
															<option value="LC">Saint Lucia</option>
															<option value="MF">Saint Martin</option>
															<option value="PM">Saint Pierre and Miquelon</option>
															<option value="WS">Samoa</option>
															<option value="SM">San Marino</option>
															<option value="ST">São Tomé and Príncipe</option>
															<option value="SA">Saudi Arabia</option>
															<option value="SN">Senegal</option>
															<option value="RS">Serbia</option>
															<option value="SC">Seychelles</option>
															<option value="SL">Sierra Leone</option>
															<option value="SG">Singapore</option>
															<option value="SK">Slovakia</option>
															<option value="SI">Slovenia</option>
															<option value="SB">Solomon Islands</option>
															<option value="SO">Somalia</option>
															<option value="ZA">South Africa</option>
															<option value="GS">South Georgia &amp; South Sandwich Islands</option>
															<option value="KR">South Korea</option>
															<option value="ES">Spain</option>
															<option value="LK">Sri Lanka</option>
															<option value="VC">St. Vincent &amp; Grenadines</option>
															<option value="SD">Sudan</option>
															<option value="SR">Suriname</option>
															<option value="SJ">Svalbard and Jan Mayen</option>
															<option value="SZ">Swaziland</option>
															<option value="SE">Sweden</option><option value="CH">Switzerland</option>
															<option value="SY">Syria</option>
															<option value="TW">Taiwan</option><option value="TJ">Tajikistan</option>
															<option value="TZ">Tanzania</option>
															<option value="TH">Thailand</option><option value="TL">Timor-Leste</option>
															<option value="TG">Togo</option>
															<option value="TK">Tokelau</option><option value="TO">Tonga</option>
															<option value="TT">Trinidad and Tobago</option>
															<option value="TN">Tunisia</option><option value="TR">Turkey</option>
															<option value="TM">Turkmenistan</option>
															<option value="TC">Turks and Caicos Islands</option>
															<option value="TV">Tuvalu</option><option value="UG">Uganda</option>
															<option value="UA">Ukraine</option>
															<option value="AE">United Arab Emirates</option>
															<option value="GB">United Kingdom</option>
															<option selected="selected" value="US">United States</option>
															<option value="UY">Uruguay</option>
															<option value="UM">U.S. Outlying Islands</option>
															<option value="VI">U.S. Virgin Islands</option>
															<option value="UZ">Uzbekistan</option>
															<option value="VU">Vanuatu</option>
															<option value="VA">Vatican City</option>
															<option value="VE">Venezuela</option>
															<option value="VN">Vietnam</option>
															<option value="WF">Wallis and Futuna</option>
															<option value="EH">Western Sahara</option>
															<option value="YE">Yemen</option>
															<option value="ZM">Zambia</option>
															<option value="ZW">Zimbabwe</option>
														</select>
													</div>
												</li>
												<li> 
													<label for="region_id">State/Province</label>
													<div class="input-box"> 
														<select title="State/Province" name="region_id" id="region_id" class="required-entry validate-select">

															<option value="">Please select region, state or province</option> 
															<option value="1">Alabama</option>
															<option value="2">Alaska</option>
															<option value="3">American Samoa</option>
															<option value="4">Arizona</option>
															<option value="5">Arkansas</option>
															<option value="6">Armed Forces Africa</option>
															<option value="7">Armed Forces Americas</option>
															<option value="8">Armed Forces Canada</option>
															<option value="9">Armed Forces Europe</option>
															<option value="10">Armed Forces Middle East</option>
															<option value="11">Armed Forces Pacific</option>
															<option value="12">California</option>
															<option value="13">Colorado</option>
															<option value="14">Connecticut</option>
															<option value="15">Delaware</option>
															<option value="16">District of Columbia</option>
															<option value="17">Federated States Of Micronesia</option>
															<option value="18">Florida</option>
															<option value="19">Georgia</option>
															<option value="20">Guam</option>
															<option value="21">Hawaii</option>
															<option value="22">Idaho</option>
															<option value="23">Illinois</option>
															<option value="24">Indiana</option>
															<option value="25">Iowa</option>
															<option value="26">Kansas</option>
															<option value="27">Kentucky</option>
															<option value="28">Louisiana</option>
															<option value="29">Maine</option>
															<option value="30">Marshall Islands</option>
															<option value="31">Maryland</option>
															<option value="32">Massachusetts</option>
															<option value="33">Michigan</option>
															<option value="34">Minnesota</option>
															<option value="35">Mississippi</option>
															<option value="36">Missouri</option>
															<option value="37">Montana</option>
															<option value="38">Nebraska</option>
															<option value="39">Nevada</option>
															<option value="40">New Hampshire</option>
															<option value="41">New Jersey</option>
															<option value="42">New Mexico</option>
															<option value="43">New York</option>
															<option value="44">North Carolina</option>
															<option value="45">North Dakota</option>
															<option value="46">Northern Mariana Islands</option>
															<option value="47">Ohio</option>
															<option value="48">Oklahoma</option>
															<option value="49">Oregon</option>
															<option value="50">Palau</option>
															<option value="51">Pennsylvania</option>
															<option value="52">Puerto Rico</option>
															<option value="53">Rhode Island</option>
															<option value="54">South Carolina</option>
															<option value="55">South Dakota</option>
															<option value="56">Tennessee</option>
															<option value="57">Texas</option>
															<option value="58">Utah</option>
															<option value="59">Vermont</option>
															<option value="60">Virgin Islands</option>
															<option value="61">Virginia</option>
															<option value="62">Washington</option>
															<option value="63">West Virginia</option>
															<option value="64">Wisconsin</option>
															<option value="65">Wyoming</option>
														</select> 
													</div>
												</li>
												<li>	
													<div class="input-box"> 
														<input name ="zipcode" placeholder="Post code/ Zip"  type ="text" class ="form-control placeholder text-box"/>
													</div>
												</li>
												<li>	
													<div class="actions"> 
														<button class="button" type="submit" title="Update totals">Update totals</button>
													</div>
												</li>

											</ul>
										</form>
										 
									</div>
								</div>
							</div> 
							<div class="col-2-old col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="totals">
									<div class ="title">
										<h3><span>Cart Total</span></h3>
									</div>
									<table id="shopping-cart-totals-table">
										<tfoot>
											<tr>
												<td colspan="1" class="a-right" style=""> 
													<span>Grand Total</span>
												</td>
												<td class="a-right" style=""> 
													<span><span class="price"><?=$total?> VND</span></span>
												</td>
											</tr>
											
										</tfoot>
										<tbody>
											<tr>
												<td colspan="1" class="a-right" style=""> Subtotal</td>
												<td class="a-right" style=""> <span class="price"><?=$total?> VND</span></td>
											</tr>
											<tr>
												<td colspan="1" class="a-right" style=""> 
													<span>Shipping</span>
												</td>
												<td class="a-right" style=""> 
													<span><span class="">Free Shipping</span></span>
												</td>
											</tr>
										</tbody>
									</table>
									 
								</div>
							</div>
						</div>
					</div>
					<div class ="cart_footer row">
						
						<div class ="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<form method="post" action="#" id="discount-coupon-form">
								<div class="discount"> 
									<div class="discount-form">  
										<input type="hidden" value="0" id="remove-coupone" name="remove">
										<div class="input-box"> 
											<input value="" placeholder="Enter caupon code" name="coupon_code" id="coupon_code" class="form-control input-text">
										</div>
										<div class="buttons-set"> 
											<button value="Apply Coupon" onclick="discountForm.submit(false)" class="button" title="Apply Coupon" type="button"><span><span>Apply Coupon</span></span></button>
										</div>
									</div>
								</div>
							</form> 
						</div>
						<div class ="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							 
							<button class="button btn-checkout" onclick="window.location.href='checkout.php'" title="Process to checkout" value="update_qty" name="update_cart_action" type="submit">
								<span><span>Process to checkout</span></span>
							</button> 
						
						</div>
					</div>
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
<script type="text/javascript">
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

	<!-- JS Page Level -->
	<script src="js/plugins/owlcarousel2/owl.carousel.min.js"></script>
	<script src="js/plugins/waypoints/waypoints.min.js"></script>
	<script src="js/theme-ajax-mail.js"></script>
	<script src="js/theme.js"></script>

	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="js/plugins/jquery.cookie.js"></script>
	<script src="js/theme-config.js"></script>
	<script>//<![CDATA[
$('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
//]]></script>
	<!--<![endif]-->
</body>
</html>
