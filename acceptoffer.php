<?php

?><!DOCTYPE html>
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
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>
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
@$user=$_SESSION['user'];
$user="abc@gmail.com";
?>

<!-- Header -->
<header>
    <div class="sticky-nav">
	<font style='color:white;font-style:italic;font-size:200%'>Welcome <?php echo $user ?></font>
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
    <!--    <div id="logoo">
        	<a id="goUp" href="#home-slider" title="Offers | Goes to slider"><h3>Offers</h3></a>
        </div>
     -->
        
    </div>
</header>
<!-- End Header -->

<div id="products" class="page">
		
		<div class="row">		
            
            
            	<center><h1>Product Enquiries</h1></center>
			<div>
			<?php
$peid=$_REQUEST['peid'];
			connect("finalerp");
			$res=mysql_query("SELECT * FROM `purchaseenquiry` WHERE `peid`='$peid'");
			while($row=mysql_fetch_array($res))
			{
			$date=date('Y-m-d');
			echo "<form method=post action='submitoffer.php'><center><table id=".$row['peid']."><Caption>ENQUIRY FOR ".$row['productname']."</caption>";
			echo "<tr><td>PRODUCT ENQUIRY ID</td><td><input type=text name=peid value='".$row['peid']."' readonly></td></tr>";
			echo "<tr><td>PRODUCT CODE</td><td><input type=text name=pc value='".$row['productcode']."' readonly></td></tr>";
			echo "<tr><td>PRODUCT NAME</td><td><input type=text name=pn value='".$row['productname']."' readonly></td></tr>";
			echo "<tr><td>PRODUCT QUANTITY</td><td><input type=text name=pq value='".$row['qty']."' readonly></td></tr>";
			echo "<tr><td>COST ESTIMATE</td><td><input type=text name=ce value='".$row['costestimate']."' readonly></td></tr>";
			echo "<tr><td>INCLUSIVE AMOUNT</td><td><input type=text name=ia value='".$row['inclusiveamount']."' readonly></td></tr>";
			echo "<tr><td>DATE OF ENQUIRY</td><td><input type=text name=doe value='".$row['date']."' readonly></td></tr>";
			echo "<tr><td>EXPECTED DATE OF DELIVERY</td><td><input name=dod type=text value='".$row['deliverydate']."' readonly></td></tr>";
			echo "<tr><td>PRICE PER UNIT</td><td><input type='number' name='price' required></td></tr>";
			echo "<tr><td>Import %</td><td><input type='number' name='import' required></td></tr>";
			echo "<tr><td>Excise %</td><td><input type='number' name='excise' required></td></tr>";
			echo "<tr><td>Central Sales Tax %</td><td><input type='number' name='cst' required></td></tr>";
			echo "<tr><td>DATE</td><td><input type='text' name='date' value='".$date."' readonly></td></tr>";
			echo "<tr><td>TOTAL AMOUNT</td><td><input type='number' name='total' required></td></tr>";
			echo "<tr><td align=right><input type='submit' class='button'></td></tr>";
			echo "</table></center></form>";}
			?>
			</div>	
		</div>
        <!-- End Portfolio Projects -->
</div>

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->

<!-- End Js -->

</body>
</html>