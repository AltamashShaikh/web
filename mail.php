<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
if(isset($_REQUEST['message'])){
$to      = 'advaita2012@gmail.com';
$subject = "Enquiry by ".$_REQUEST['Name'];
$message = $_REQUEST['message'];

mail($to, $subject, $message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store: An Ecommerce Online Shopping Website</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		$('.sbmincart-submit').click(function(e){
			e.preventDefault();
			<?php if(!isset($_SESSION['user'])){  ?>
				alert('Please login before proceeding for checkout');
			<?php }else{ ?>
				buyalljs();
			<?php }?>
			
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
	</head> 
	<body>
		<!-- for bootstrap working -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<!-- //for bootstrap working -->
		<!-- header modal -->
		<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
			aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
						<h4 class="modal-title" id="myModalLabel">What Are You Waiting For??, Login now!!</h4>
					</div>
					<div class="modal-body modal-body-sub">
						<div class="row">
							<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
								<div class="sap_tabs">	
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
										<ul>
											<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
											<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
										</ul>		
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="facts">
												<div class="register">
													<form action="signup.php?login" method="post">			
														<input name="un" placeholder="User Name" type="text" required="">						
														<input name="pd" placeholder="Password" type="password" required="">										
														<div class="sign-up">
															<input type="submit" value="Sign in"/>
														</div>
													</form>
												</div>
											</div> 
										</div>	 
										<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">
												<div class="register">
													<form action="signup.php?signup" method="post">			
														<input placeholder="user name" type='text' maxlength='10' id='uname' name='uname' required="" onblur="usernamevalidation(this.value)"  style='float:left'><div id='signupajax'></div>
														&nbsp;
														<input placeholder="Email Address" type='text' id='email' name='email' placeholder='email'required="">	
														<input placeholder="Password" type='password' maxlength=10 id='pass' name='pass' placeholder='more than 7 characters' onblur=pas() required="">	
														<input placeholder="Re enter Password" type='password' maxlength=10 id='repassword' name='repassword' placeholder='Password' onblur=repas() />
														&nbsp;
														<input placeholder="Phone Number" type="text" maxlengt=10 minlength=10 name="phone">
														&nbsp;
														<label class="radio-inline">
														  <input type="radio" value="male" name="sex">Male
														</label>
														<label class="radio-inline">
														  <input type="radio" value="female" name="sex">Female
														</label>
														<div class="sign-up">
															<input type="submit" value="Create Account"/>
														</div>
													</form>
												</div>
											</div>
										</div> 			        					            	      
									</div>	
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
								<div id="OR" class="hidden-xs">And</div>
							</div>
							<div class="col-md-4 modal_body_right modal_body_right1">
								<div class="row text-center sign-with">
									<div class="col-md-12">
										<h4 class="other-nw">If You Are The Supplier Then</h4>
										&nbsp;
										&nbsp;
										<input id="supplier" type="Checkbox" name="supplier" value="supplier">
									&nbsp;
									&nbsp;
									&nbsp;
									<h3>I am the Supplier<h3>
										
									</div>
									
									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			<?php if(!isset($_SESSION['user'])){?>
				$('#myModal88').modal('show');
			<?php }?>
		</script>  
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>MOBILES</h6>
											<li><a href="mobile.php">Mobile Phones</a></li>
											 
											<li><a href="mobile.php">Popular Models</a></li>
												</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>LAPTOPS</h6>
											<li><a href="laptop.php">Laptops</a></li>
											<li><a href="laptop.php">Trending Models</a></li>
											
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>CAMERAS</h6>
												<li><a href="camera.php">Cameras</a></li>
												<li><a href="camera.php">Latest Models</a></li>
										
											</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>10%<i>Off/-</i></h4>
											<img src="images/iphone6.jpeg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li> 
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">History <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.html">Feedback</a></li>
								<li><a href="codes.html">Complaint</a></li>     
							</ul>
						</li>  
						<li><a href="mail.php">Mail Us</a></li>
						<li><a href="index.php">Logout</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Mail Us</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Mail Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Mail Us</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					<p>16/1374 Avenue, 4th block,
Bandra West.
						</p>
					<ul>
						<li>Free Phone :+91 9870111313</li>
						<li>Telephone :022 26472063</li>
						<li>Fax :+1 078 4589 2456</li>
						<li><a href="mailto:advaita2012@gmail.com">advaita@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="mail.php" method="post">
						<input type="text" name="Name" placeholder="Your Name" required="">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="text" name="Telephone" placeholder="Telephone No" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //mail -->
<!-- newsletter -->
	<div class="newsletter" id="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Keep yourself updated about our offers!!!</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="news_letter_mail.php" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
                        <?php 
			
			$scroll=false;
			if(isset($_SESSION['newsletter_message'])){
                            echo '<p class="text-center" style="color: #f2dede;">'.(isset($_SESSION['newsletter_message'])?$_SESSION['newsletter_message']:'').'</p>';
			    $scroll=true;
			    unset($_SESSION['newsletter_message']);
			}
			?>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Ready to help always and forever.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>16/1374 Avenue, 4th block, <span>Bandra West.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">advaita2012@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 9870111313</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="mail.php">Mail Us</a></li>
						<li><a href="camera.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Categories</h3>
					<ul class="info"> 
						<li><a href="mobile.php">Mobiles</a></li>
						<li><a href="laptop.php">Laptops</a></li>
						<li><a href="camera.php">Cameras</a></li>
										</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.php">Home</a></li>
						<li><a href="laptop.php">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2018 Electronic Store. All rights reserved | Design by <a href="about.php">Advaita G. Savant</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
        	<?php if($scroll){ ?>
	<script type="text/javascript">
	$('html, body').animate({
        scrollTop: $('#newsletter').offset().top
    }, 'slow');
	</script>
	<?php } ?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>