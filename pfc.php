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
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
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
		$('.sbmincart-submit').click(function(e){
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
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<div id="history" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                   <table class=table><caption><h3>History</h3></caption></table>
						<?php
				$dbname='finalerp';
				$con=connect($dbname);
				$email=$_SESSION['email'];
				$res=mysql_query("SELECT * FROM `purchasedproducts` WHERE `custemail`='$email'",$con);
				$cart=array();
				while($past=mysql_fetch_array($res))
				{	//print_r($past);
				array_push($cart,$past['pid']);
				}echo "<section><ul id='thumbs'>";
				$pcost=0;
				$i=0;
				
				foreach($cart as $prod)
				{
				$query=mysql_query("SELECT * FROM `products` WHERE `pid`='$prod'",$con);
				while($row=mysql_fetch_array($query))
					{
						$i++;
						$pid=$row['pid'];
						$pname=$row['pname'];
						$pd=$row['pdescp'];
						$pimage=$row['pimage'];
						$pcost=$row['pcost'];
						$pcat=$row['pcategory']; ?>
							<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles" style="padding-bottom: 5%">
								<div class="agile_ecommerce_tab_left mobiles_grid">
									<div class="hs-wrapper hs-wrapper2">
										<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
										<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
										<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
										<img src="images/<?php echo $pimage;?>" alt=" " class="img-responsive" />
											 
										<div class="w3_hs_bottom w3_hs_bottom_sub1">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
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
											<!--<button type="submit" class="w3ls-cart">Add to cart</button>-->
										</form>
									</div> 
									<!--<div class="mobiles_grid_pos">
										<h6>New</h6>
									</div>-->
								</div>
							</div>
							
					<?php }}
						if($pcost==0){ echo "No products bought before";}
										
						?>
				
				</div>
			</div>
		</div>
	</div>
</div>	
<?php 
		$i=0;
		foreach($cart as $prod)
				{
				$query=mysql_query("SELECT * FROM `products` WHERE `pid`='$prod'",$con);
				while($row=mysql_fetch_array($query))
					{
						$i++;
						$pid=$row['pid'];
						$pname=$row['pname'];
						$pd=$row['pdescp'];
						$pimage=$row['pimage'];
						$pcost=$row['pcost'];
						$pcat=$row['pcategory'];
					?>
						<div class="modal video-modal fade" id="myModal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="myModal<?php echo $i;?>">
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
													<?php //<form action="#" method="post"> ?>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="<?php echo $pid;?>" /> 
														<input type="hidden" name="w3ls_item" value="<?php echo $pname;?>" /> 
														<input type="hidden" name="amount" value="<?php echo $pcost;?>"/>   
														<button id="feedbackbutton" onclick="feedback(this.id)" id="<?php echo $pid;?>" >Want to submit Feedback?</button>
														<button id="complaintbutton" onclick="complaint(this.id)" id="<?php echo $pid;?>" >Want to raise Complaint?</button>
													<?php //</form> ?>
												</div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</section>
								</div>
							</div>
						</div>  
				<?php } }?>
<div id="feed" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                   <!--h2 class="title">Complaint/Feedback</h2>-->
					<?php
					$res=mysql_query("SELECT * from `feedback` where email='$email'",$con);

					if(mysql_num_rows($res)!=0){
					echo '<table class=table><caption><h3>Feedback</h3></caption><tr><td>Product Id</td><td>Feedback</td><td></td></tr>';
					while($p=mysql_fetch_array($res))
					{
						echo"	<tr><td>".$p['pid']."</td><td>".$p['feedback']."</td><td>THANK YOU FOR YOUR FEEDBACK</td></tr>	";
					}}else{ echo "<p><h3>No Feedbacks</h3></p>";
					}
						

					?></table>
					<?php
					
					$res=mysql_query("SELECT * from `complaint` where email='$email'",$con);

					if(mysql_num_rows($res)!=0){
					echo '<table class=table><caption><h3>Complaints</h3></caption><tr><td>Product Id</td><td>Complaint Number</td><td>Complaint</td><td>Service Date</td><td>Service Status</td><td>Service Time</td><td>Product Submitted?</td></tr>';
					while($p=mysql_fetch_array($res))
					{
						echo"	<tr><td>".$p['pid']."</td><td>".$p['serviceid']."</td><td>".$p['complaint']."</td><td>".$p['servicedate']."</td><td>".$p['servicestatus']."</td><td>".$p['servicetime']."</td><td>".$p['submitproduct']."</td></tr>	";
					}}else{ echo "<p><h3>No Complaints</h3></p>";
					}
					?></table>
				</div>
			</div>
		</div>
	</div>
</div>	

				   

			
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
						<li><a href="index.php">Home</a></li>
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

function complaint(abc)
{
var add=prompt("ENTER COMPLAINT HERE :");
if ( (add !== "") && (add !== null) ) {
window.location='products.php?complaint='+add+'&prod1='+abc;
  }

}

function feedback(abc)
{
var add=prompt("ENTER FEEDBACK HERE :");
if ( (add !== "") && (add !== null) ) {
window.location='products.php?feedback='+add+'&prod1='+abc;
window.location='products.php?feedback='+add+'&prod1='+abc;
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