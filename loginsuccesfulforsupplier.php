<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head><?php

function connect($dbname)
	{	$dbname='finalerp';
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
?>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Suppliers page</title>   

<meta name="description" content="Ecommerce site" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="include/css/supersized.css" rel="stylesheet">
<link href="include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="include/css/supersized.css" rel="stylesheet">
<link href="include/css/supersized.shutter.css" rel="stylesheet">

<!-- Custom -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/supplier_style.css" rel="stylesheet" type="text/css" media="all">
<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="include/js/modernizr.js"></script>
<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();  
</script>
<!-- End Analytics -->
</head>
<body>
<?php
session_start();
$user=$_SESSION['user'];
$email=$_SESSION['email'];

//$user="abc@gmail.com";
?>
<!-- This section is for Splash Screen -->

<!-- Header --><div class="header" id="home1">
		<div class="container">
			
			<div class="w3l_logo">
				<h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			
		</div>
	</div>
<header>
    <div class="sticky-nav">
	    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
    <!--    <div id="logoo">
        	<a id="goUp" href="#home-slider" title="Offers | Goes to slider"><h3>Offers</h3></a>
        </div>
     -->
	 <div class="navigation">
        <div class="container">
		<nav id="menu" class="nav navbar-nav navbar-default">
        	<ul id="menu-nav" class="nav navbar-nav">
            	<li><a href="#products">Product Enquiries</a></li>
                <li><a href="#dp">Accepted Offers</a></li>
				<li><a href="#nh">Offers Pending</a></li>
				<li><a href="signup.php?logout">Logout</a></li>
            </ul>
        </nav>
		</div>
	</div>
        
    </div>
</header>
<!-- End Header -->

<div id="products" class="page">
		
		<div class="mail">		
            
            <div class="container">
			<h3>Product Enquiries</h3>
			</div>
			<div class="container">
			<?php
			connect("finalerp");
			$res=mysql_query("SELECT * FROM `purchaseenquiry` WHERE status=0");
			while($row=mysql_fetch_array($res)) { ?>
			<h4><center>Enquiry Form For : <?php echo $row['productname'] ?></center></h4>
			<?php 
			echo "<table align=center class='supplier' id= ". $row['peid'].">";
			echo "<tr><td class='left'>Product Enquiry Id</td><td class='right'>".$row['peid']."</td></tr>";
			echo "<tr><td class='left'>Product Code</td><td class='right'>".$row['productcode']."</td></tr>";
			echo "<tr><td class='left'>Product Name</td><td class='right'>".$row['productname']."</td></tr>";
			echo "<tr><td class='left'>Product Quantity</td class='right'><td>".$row['qty']."</td></tr>";
			echo "<tr><td class='left'>Cost Estimate</td><td class='right'>".$row['costestimate']."</td></tr>";
			echo "<tr><td class='left'>Inclusive Amount</td><td class='right'>".$row['inclusiveamount']."</td></tr>";
			echo "<tr><td class='left'>Date of Enquiry</td><td class='right'>".$row['date']."</td></tr>";
			echo "<tr><td class='left'>Expected Date of Delivery</td><td class='right'>".$row['deliverydate']."</td></tr>";
			echo "<tr><td colspan ='2' align=middle><input type='button' class='button' name='button' value='Make/Accept an Offer' id=".$row['peid']." onclick='acceptoffer(this.id)'></td></tr>";
			echo "</table>";}
			?>
			</div>	
		</div>
        <!-- End Portfolio Projects -->
</div>
<div id="dp" class="page">
		
		<div class="mail">
			<div class="container">
            
            <h3>Accepted Offers</h3>
				<?php
				connect("finalerp");
				$res=mysql_query("SELECT * FROM `supplieroffers` WHERE `email`='$email' and `offeraccept`='1'");
				while($row=mysql_fetch_array($res))
				{ ?>
				<h4><center>Enquiry For :<?php echo $row['productname'] ?></center></h4>
				<?php 
				echo "<table  align=center class='supplier' id=".$row['productcode'].">";
				echo "<tr><td class='left'>Supplier ID</td><td class='right'>".$row['supid']."</td></tr>";
				echo "<tr><td class='left'>Product Code</td><td class='right'>".$row['productcode']."</td></tr>";
				echo "<tr><td class='left'>Product Name</td><td class='right'>".$row['productname']."</td></tr>";
				echo "<tr><td class='left'>Product Quantity</td><td class='right'>".$row['qty']."</td></tr>";
				echo "<tr><td class='left'>Price Per Unit</td><td class='right'>".$row['priceperunit']."</td></tr>";
				echo "<tr><td class='left'>Total Amount</td><td class='right'>".$row['total']."</td></tr>";
				echo "<tr><td class='left'>Date of Enquiry</td><td class='right'>".$row['date']."</td></tr>";
				echo "<tr><td>Offer Id</td><td>".$row['offerid']."</td></tr>";
				echo "</table>";}
				?>

			</div>
		</div>
        <!-- End Portfolio Projects -->
</div>
<div id="nh" class="page">		
		<div class="mail">
			<div class="container">
            <h3>Offers Pending</h3>
				<?php
				connect("finalerp");
				$res=mysql_query("SELECT * FROM `supplieroffers` WHERE `email`='$email' and `offeraccept`='0'");
				while($row=mysql_fetch_array($res))
				{ ?>
				<h4><center>Enquiry For <?php echo $row['productname'] ?></center></h4>
				<?php
				echo "<table align=center class='supplier' id=".$row['productcode'].">";
				echo "<tr><td class='left'Supplier Id</td><td class='right'>".$row['supid']."</td></tr>";
				echo "<tr><td class='left'>Product Code</td><td class='right'>".$row['productcode']."</td></tr>";
				echo "<tr><td class='left'>Product Name</td><td class='right'>".$row['productname']."</td></tr>";
				echo "<tr><td class='left'>Product Quantity</td><td class='right'>".$row['qty']."</td></tr>";
				echo "<tr><td class='left'>Price Per Unit</td><td class='right'>".$row['priceperunit']."</td></tr>";
				echo "<tr><td class='left'>Total Amount</td><td class='right'>".$row['total']."</td></tr>";
				echo "<tr><td class='left'>Date of Enquiry</td><td class='right'>".$row['date']."</td></tr>";
				echo "<tr><td class='left'>Offer Id</td><td>".$row['offerid']."</td></tr>";
				echo "</table>";}
				?>
			</div>
		</div>
        <!-- End Portfolio Projects -->
</div>
<script type="text/javascript">
function acceptoffer(abc)
{
window.location="acceptoffer.php?peid="+abc;
}
</script>
<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- jQuery Core -->
<script src="include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="include/js/main.js"></script> <!-- Default JS -->

<!-- End Js -->

</body>
</html>