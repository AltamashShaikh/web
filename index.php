<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); 

function connect($dbname)
	{
		$con=mysql_connect('localhost','root',''); 
		mysql_select_db($dbname,$con);
		if(!$con)
		{
			die("could not found");
		}
		else
		{
			return $con;
		}
	}
$con=connect('finalerp');

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
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		$('body').on('click','.sbmincart-submit',function(e){
			//e.preventDefault();
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
														<input type="hidden" id="suppliers" name="supplier" value="0"/>						
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
														<input placeholder="Re-enter Password" type='password' maxlength=10 id='repassword' name='repassword' placeholder='Password' onblur=repas() />
														&nbsp;
														<input placeholder="Phone Number" type="text" maxlengt=10 minlength=10 name="phone">
														<input type="hidden" id="suppliers1" name="supplier" value="0" />
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
			<!--<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>-->
			<div class="w3l_logo">
				<h1><a href="index.php">Electronic Store<span>Your store. Your place.</span></a></h1>
			</div>
			<!---<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>-->
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
						<li><a href="index.php" class="act">Home</a></li>	
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
								<li><a href="pfc.php">Purchase</a></li>
								<li><a href="pfc.php">Feedback</a></li>
								<li><a href="pfc.php">Complaint</a></li>     
							</ul>
						</li>  
						<li><a href="mail.php">Mail Us</a></li>
						<?php if(isset($_SESSION['user'])){  ?>
						<li><a href="signup.php?logout">Logout</a></li>
						<?php }?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
	<div class="container">
	<h3>Electronic Store, <span>Special Offers</span></h3>
	</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<!-- pop-up-box -->     
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Mobiles</a></li>
						
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video"></a></li>
						
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Laptops</a></li>
						
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video"></a></li>
						
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Cameras</a></li>
					</ul>
					<?php 
							$mysql_limit3_query = "(SELECT * FROM `products` where `pcategory` = 'cameras' limit 3) union
							(SELECT * FROM `products` where `pcategory` = 'mobile' limit 3) union
							(SELECT * FROM `products` where `pcategory` = 'laptops' limit 3) order by pcategory desc";
							$query = mysql_query($mysql_limit3_query,$con);
						?>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<?php 
								$i=0;
								while($row=mysql_fetch_array($query))
								{ 
									$i++;
									$id = $row['id'];
									$pid=$row['pid'];
									$pname=$row['pname'];
									$pd=$row['pdescp'];
									$pimage=$row['pimage'];
									$pcost=$row['pcost'];
									$pcat=$row['pcategory'];
									if($pcat == 'mobile'){
								?>
										<div class="col-md-4 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													
												
												<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal<?php echo $id;?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>
											</div> 
											<h5><?php echo $pname;?></h5>
											<div class="simpleCart_shelfItem">
												<p><i class="item_price">Rs. <?php echo $pcost;?></i></p>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
													<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
													<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
													<button type="submit" class="w3ls-cart">Add to cart</button>
												</form>
											</div>
										</div>
								
								<?php }if($i%3==0){break;}}
								?>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<?php 
								//$i=0;
								while($row=mysql_fetch_array($query))
								{ 
									$i++;
									$id = $row['id'];
									$pid=$row['pid'];
									$pname=$row['pname'];
									$pd=$row['pdescp'];
									$pimage=$row['pimage'];
									$pcost=$row['pcost'];
									$pcat=$row['pcategory'];
									if($pcat == 'laptops'){
								?>
										<div class="col-md-4 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													
												
												<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal<?php echo $id;?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>
											</div> 
											<h5><?php echo $pname;?></h5>
											<div class="simpleCart_shelfItem">
												<p><i class="item_price">Rs. <?php echo $pcost;?></i></p>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
													<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
													<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
													<button type="submit" class="w3ls-cart">Add to cart</button>
												</form>
											</div>
										</div>
								
								<?php }if($i%3==0){break;}}
								?>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								<?php 
								//$i=0;
								while($row=mysql_fetch_array($query))
								{ 
									$i++;
									$id = $row['id'];
									$pid=$row['pid'];
									$pname=$row['pname'];
									$pd=$row['pdescp'];
									$pimage=$row['pimage'];
									$pcost=$row['pcost'];
									$pcat=$row['pcategory'];
									if($pcat == 'cameras'){
								?>
										<div class="col-md-4 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
													
												
												<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal<?php echo $id;?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>
											</div> 
											<h5><?php echo $pname;?></h5>
											<div class="simpleCart_shelfItem">
												<p><i class="item_price">Rs. <?php echo $pcost;?></i></p>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
													<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
													<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
													<button type="submit" class="w3ls-cart">Add to cart</button>
												</form>
											</div>
										</div>
								
								<?php }if($i%3==0){break;}}
								?>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom --> 
	<!-- modal-video -->
	<?php 
		//$i=0;
		$query = mysql_query($mysql_limit3_query);
		while($row=mysql_fetch_array($query)){
			//$i++;
			$id = $row['id'];
			$pid=$row['pid'];
			$pname=$row['pname'];
			$pd=$row['pdescp'];
			$pimage=$row['pimage'];
			$pcost=$row['pcost'];
			$pcat=$row['pcategory'];
		?>
			<div class="modal video-modal fade" id="myModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $i;?>">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<section>
							<div class="modal-body">
								<div class="col-md-5 modal_body_left">
									<img src="images/<?php echo $pimage; ?>" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 modal_body_right">
									<h4><?php echo $pname;?></h4>
									<p><?php echo $pd; ?></p>
									 
									<div class="modal_body_right_cart  simpleCart_shelfItem">
										<p><i class="item_price">Rs.<?php echo $pcost ?></i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
											<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
											<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
					</div>
				</div>
			</div>  
	<?php } ?><!-- Related Products -->
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3><span>Grand Event With flat</span><br><span>20% <i>Discount</i></span></h3>
				<a href="laptop.php">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
						
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t1.png" alt=" " class="img-responsive" />
										<p>This is one of the top ranked online shopping site in india. its products and service is very impressive and shipping time is also very short like 2 to 3 days which is really good for us. Recently I had purchase a lenovo laptop from this site and it is delivered to me with in 3 days and well packed with seal that handle with care. The website is also very good organised. The offers are really cheap from local market.</p>
										<h4>VERONICA</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t2.png" alt=" " class="img-responsive" />
										<p>The service and shipping quality is very good and the products are genuine specially electronics. They has a 30 days refund policy this is good. But in my product there was no damage at all and it works perfectly fine. and the customer support is also very responsive.</p>
										<h4>ASTON</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t3.png" alt=" " class="img-responsive" />
										<p>Hello friends.It is a very good online app as we can by the best electronics online.Till now my experience of buying product on this app is very nice compared to other applications.I received delivery  in 3 days which is very quick.So for buying electronics specially laptops I suggest all to buy from here.</p>
										<h4>NIKITA</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/hpspetre13.jpg" alt=" " class="img-responsive" />
					
					<img src="images/c0012.jpeg" alt=" " class="img-responsive" />
					
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Special <span><span>Deal</span></span></h4>
								
						<h5><span></span></h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
			<?php 
				$mysql_limit4_query = "SELECT * FROM `products`order by id desc limit 4 ";
				$query = mysql_query($mysql_limit4_query,$con);
			?>
			<?php 
				while($row=mysql_fetch_array($query))
				{ 
					$id = $row['id'];
					$pid=$row['pid'];
					$pname=$row['pname'];
					$pd=$row['pdescp'];
					$pimage=$row['pimage'];
					$pcost=$row['pcost'];
					$pcat=$row['pcategory'];
				?>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
							<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
							<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
							<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
							<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal<?php echo $id;?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5>"<?php echo $pname;?>"</h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">Rs.<?php echo $pcost ?></i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="<?php echo $pid;?>"> 
								<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>"> 
								<input type="hidden" name="amount" value="<?php echo $pcost;?>">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<?php }?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php 
		//$i=0;
		$query = mysql_query($mysql_limit4_query);
		while($row=mysql_fetch_array($query)){
			//$i++;
			$id = $row['id'];
			$pid=$row['pid'];
			$pname=$row['pname'];
			$pd=$row['pdescp'];
			$pimage=$row['pimage'];
			$pcost=$row['pcost'];
			$pcat=$row['pcategory'];
		?>
			<div class="modal video-modal fade" id="myModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $id;?>">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<section>
							<div class="modal-body">
								<div class="col-md-5 modal_body_left">
									<img src="images/<?php echo $pimage; ?>" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 modal_body_right">
									<h4><?php echo $pname;?></h4>
									<p><?php echo $pd; ?></p>
									 
									<div class="modal_body_right_cart  simpleCart_shelfItem">
										<p><i class="item_price">Rs.<?php echo $pcost ?></i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
											<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
											<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
					</div>
				</div>
			</div>  
	<?php } ?><!-- Related Products -->
	
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 
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
			<?php echo '<p class="text-center" style="color: #f2dede;">'.(isset($_SESSION['newsletter_message'])?$_SESSION['newsletter_message']:'').'</p>';
			
			$scroll=false;
			if(isset($_SESSION['newsletter_message'])){
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
						<li><a href="mail.html">Mail Us</a></li>
						<li><a href="products.html">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Categories</h3>
					<ul class="info"> 
						<li><a href="products.html">Mobiles</a></li>
						<li><a href="products1.html">Laptops</a></li>
						<li><a href="products.html">Cameras</a></li>
										</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.html">Home</a></li>
						<li><a href="products.html">Today's Deals</a></li>
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
	
		jQuery("#supplier").click(function(){
			if(jQuery("#supplier").is(":checked")){
				jQuery("#suppliers").val("supplier");
				jQuery("#suppliers1").val("supplier");
			}else{
				jQuery("#suppliers").val("0");
				jQuery("#suppliers1").val("0");
			}
		})
		
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
	<script type='text/javascript'>
function usernamevalidation(name)
{
 var xml;
if (window.XMLHttpRequest)
{
xml=new XMLHttpRequest();
}
else
{
xml=new ActiveXObject('Microsoft.XMLHTTP');
}
xml.onreadystatechange=function()
{
if (xml.readyState==4)
{
document.getElementById('signupajax').innerHTML=xml.responseText;
}
}
xml.open('get','signup.php?signupajax&name='+name,true);
xml.send();
return false;

}
function pas()
{
 var pas=document.getElementById('pass').value;
 if(pas.length<7)
 {alert('password must be greater then 7');
 document.getElementById('repassword').focus();
 }
}
function buyalljs()
{
	var add=prompt("ENTER ADDRESS :");
	if ( (add !== "") && (add !== null) ) {
		w3ls.reset.apply();
		window.location='products.php?buy='+add;
	}
}
</script>
	<!-- //cart-js -->   
<style>
.col-md-7.agileinfo_banner_bottom1_grid_left h3{
	float:left;
}
.col-md-7.agileinfo_banner_bottom1_grid_left a{
	float: left;
    clear: both;    
	margin-left: 9%;
}
.agileinfo_banner_bottom1_grid_left h3 span{
	font-size: 1.8em;
}
.col-md-7.modal_body_right h5, .col-md-7.modal_body_right .color-quality {
    display: none;
}
</style>
</body>
</html>