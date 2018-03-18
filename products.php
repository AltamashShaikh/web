<?php
session_start();

$con=mysql_connect('localhost','root','');
mysql_select_db('finalerp',$con);


//echo $_REQUEST['val'];
if(isset($_REQUEST['val']))
{
$array=explode(",",$_REQUEST['val']);
$a=1;
}
if(isset($_REQUEST['value']))
{
$b=1;
$array=explode(",",$_REQUEST['value']);
}//print_r($array);
if(@$a==1||@$b==1)
{
$size=sizeof($array);
//echo $size;
$con=mysql_connect('localhost','root','');
mysql_select_db('finalerp',$con);

$sql="select * from products ORDER BY `id` DESC";
if($array[0]!=''&&$size==1)
{
	$temp=$array[0];
		$sql="SELECT * FROM `products` WHERE `pcategory`='$array[0]'";
}

if($size==2)
{
$temp=$array[0];
$temp2=$array[1];
		$sql="SELECT * FROM `products` WHERE `pcategory`='$array[0]' OR `pcategory`='$array[1]' ORDER BY `id` DESC";
}

$r=mysql_query($sql);

while($row=mysql_fetch_array($r))
{
$pid=$row['pid'];
$pname=$row['pname'];
$pd=$row['pdescp'];
$pimage=$row['pimage'];
$pcost=$row['pcost'];
$pcat=$row['pcategory'];
if(isset($_REQUEST['val']))
{
echo "
			<li class='item-thumbs span3 design'>
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class='hover-wrap fancybox' data-fancybox-group='gallery' title='Rs.".$pcost."' href='images/".$pimage."'>
                                	<span class='overlay-img'><p>Product ID:".$pid."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs".$pcost."</p><p>Product Name:".$pname."</p><p>Description:".$pd."</p></span>
                                   
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src='images/".$pimage."' alt='Product ID:".$pid."</br>Product Name:".$pname."</br>Description:".$pd."</br><font color=red>Sign up for attractive offers and to buy this product</font>' style='height:190px'>
			</li>        	
				";
}
else
{
echo '
			<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rs.'.$pcost.'" href="images/'.$pimage.'">
                                	<span class="overlay-img"><p>Product ID:'.$pid.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs'.$pcost.'</p><p>Product Name:'.$pname.'</p><p>Description:'.$pd.'</p></span>
                                   ';
                        echo "        </a>
                                <!-- Thumb Image and Description -->
                                <img src='images/".$pimage."' alt='Product ID:".$pid."</br>Product Name:".$pname."</br>Description:".$pd."</br><button id=$pid onclick=cookiejs(this.id)>ADD TO CART</button>' style='height:190px'>
			</li>        	";
			
}
}//echo "</ul></section><h5>TOTAL AMOUNT IS RS.$cost</h5><button onclick=buyalljs()>Buy all Products in Cart</button>";
}

if(isset($_REQUEST['prod']))
				{
				$cost=0;
				$con=mysql_connect('localhost','root','');
				mysql_select_db('finalerp',$con);
				
				array_push($_SESSION['pcartid'],$_REQUEST['prod']);
				$_SESSION['pcartid']=array_filter($_SESSION['pcartid']);
				$cart=$_SESSION['pcartid'];
				echo "<ul id='thumbs'>";
foreach($cart as $prod)
{
				$query=mysql_query("SELECT * FROM `products` WHERE `pid`='$prod'",$con);
				while($row=mysql_fetch_array($query))
					{
						$pid=$row['pid'];
						$pname=$row['pname'];
						$pd=$row['pdescp'];
						$pimage=$row['pimage'];
						$pcost=$row['pcost'];
						$pcat=$row['pcategory'];
				echo "
<li class='item-thumbs span3 design'>
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class='hover-wrap fancybox' data-fancybox-group='gallery' title='Rs.".$pcost."' href='images/".$pimage."'>
                                	<span class='overlay-img'><p>Product ID:".$pid."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs".$pcost."</p><p>Product Name:".$pname."</p><p>Description:".$pd."</p></span>
                                   
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src='images/".$pimage."' alt='Product ID:".$pid."</br>Product Name:".$pname."</br>Description:".$pd."</br><button id=$pid onclick=buyjs(this.id)>Buy This Product</button>&nbsp;&nbsp;<button id=$pid onclick=deljs(this.id)>Delete This Product</button>' style='height:190px'>
			</li>";
$cost=$pcost+$cost;
				}
}echo "</ul></section>";if($cost>0){echo "<h5>TOTAL AMOUNT IS RS.$cost</h5><button onclick='buyalljs()'>Buy all Products in Cart</button>"; }else echo "No product in cart";

				}
				
				
				
				
if(isset($_REQUEST['delprod']))
				{
				$del=$_REQUEST['delprod'];
				$array=$_SESSION['pcartid'];
				if (($key = array_search($del, $array)) !== false) {
				unset($array[$key]);
				}
				$_SESSION['pcartid']=$array;
				$cart=$array;
				$cost=0;
				echo "<ul id='thumbs'>";
foreach($cart as $prod)
{
				$query=mysql_query("SELECT * FROM `products` WHERE `pid`='$prod'",$con);
				while($row=mysql_fetch_array($query))
					{
						$pid=$row['pid'];
						$pname=$row['pname'];
						$pd=$row['pdescp'];
						$pimage=$row['pimage'];
						$pcost=$row['pcost'];
						$pcat=$row['pcategory'];
				echo "
<li class='item-thumbs span3 design'>
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class='hover-wrap fancybox' data-fancybox-group='gallery' title='Rs.".$pcost."' href='images/".$pimage."'>
                                	<span class='overlay-img'><p>Product ID:".$pid."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs".$pcost."</p><p>Product Name:".$pname."</p><p>Description:".$pd."</p></span>
                                   
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src='images/".$pimage."' alt='Product ID:".$pid."</br>Product Name:".$pname."</br>Description:".$pd."</br><button id=$pid onclick=buyjs(this.id)>Buy This Product</button>&nbsp;&nbsp;<button id=$pid onclick=deljs(this.id)>Delete This Product</button>' style='height:190px'>
			</li>";
$cost=$pcost+$cost;
				}
}echo "</ul></section>";if($cost>0){echo "<h5>TOTAL AMOUNT IS RS.$cost</h5><button onclick='buyalljs()'>Buy all Products in Cart</button>"; }else echo "No product in cart";

		}		
		
if(isset($_REQUEST['buy']))
				{	
echo $buy=$_REQUEST['buy'];				
		$con=mysql_connect('localhost','root','');
		mysql_select_db('finalerp',$con);
		$email=$_SESSION['email'];
		$prod=$_SESSION['pcartid'];
		$s="SELECT * FROM customer where `custemail`='$email'";
		$res=mysql_query($s);
		$row=mysql_fetch_array($res);
		$custid=$row['custid'];
		$custname=$row['custname'];
		$custphone=$row['custphone'];
		$custaddress=$row['custaddress'];
		$hist=$_SESSION['pcartid'];
		$date=date('y-m-d');
		//print_r($hist);
	
$update="UPDATE `customer` SET `custaddress`='$buy' WHERE `custemail`='$email'";
mysql_query($update,$con);
foreach($hist as $prod)
{	
$k=mysql_query("SELECT * FROM `products` WHERE pid='$prod'");
$row=mysql_fetch_array($k);
$cost=$row['pcost'];
$pid=$row['pid'];	
$pname=$row['pname'];

$date=date('d-m-y');
		$sql="INSERT INTO `purchasedproducts`(`id`, `pid`, `pname`, `date`, `custid`, `custname`, `custemail`, `custphone`, `custaddress`, `deliverystatus`, `flag`) VALUES ('','$pid','$pname','$date','$custid','$custname','$email','$custphone','$custaddress','pending',1)";
		
	$sql;
		mysql_query($sql,$con);
}		$_SESSION['pcartid']=array();
header("Location:index.php");
				}

if(isset($_REQUEST['buythis']))
				{	
$prod=$_REQUEST['buythis'];

$address=$_REQUEST['add'];				
		$email=$_SESSION['email'];
		$con=mysql_connect('localhost','root','');
		mysql_select_db('finalerp',$con);
$k=mysql_query("SELECT * FROM `products` WHERE pid='$prod'");
$row=mysql_fetch_array($k);
$cost=$row['pcost'];	
$pname=$row['pname'];
		$email=$_SESSION['email'];

$update="UPDATE `customer` SET `custaddress`='$address' WHERE `custemail`='$email'";
mysql_query($update,$con);

	$s="SELECT * FROM customer where `custemail`='$email'";
		$res=mysql_query($s);
		$row=mysql_fetch_array($res);
		$custid=$row['custid'];
		$custname=$row['custname'];
		$custphone=$row['custphone'];
		$custaddress=$row['custaddress'];
		$date=date('y-m-d');
		$sql="INSERT INTO `purchasedproducts`(`id`, `pid`, `pname`, `date`, `custid`, `custname`, `custemail`, `custphone`, `custaddress`, `deliverystatus`, `flag`) VALUES ('','$prod','$pname','$date','$custid','$custname','$email','$custphone','$custaddress','pending',1)";
		echo $sql;
		mysql_query($sql,$con);
		header("Location:loggedin.php");
				}

				
if(isset($_REQUEST['complaint']))
{
$complaint=$_REQUEST['complaint'];
$prod=$_REQUEST['prod1'];				
		$con=mysql_connect('localhost','root','');
		mysql_select_db('finalerp',$con);
		$email=$_SESSION['email'];
		//$his=$_SESSION['pcartid'];
		//$hist = implode(",", $his);
		//print_r($hist);
		$time=date('d-m-y');
		$sd=date('d')+2;
		$sd1=date('m-y');
		$sd=$sd."-".$sd1;
		$st="between 10 to 2";
		//$time=strtotime($time);
		$sql="SELECT * FROM `customer` WHERE `custemail`='$email'";
		$res=mysql_query($sql);
		$row=mysql_fetch_assoc($res);
		$id=$row['custid'];
		$custname=$row['custname'];
		$tokennumber=date('d-m-y-s');
		$tokennumber=$prod."-".$tokennumber;
                $pid=$_GET['pid'];
$sqlcrm="INSERT INTO `complaint`(`serviceid`, `pid`, `custid`, `custname`, `email`, `complaint`, `tokennumber`, `servicedate`, `servicetime`, `submitproduct`, `warranty`, `servicestatus`, `servicecompletedate`, `servicebill`, `flag`) VALUES ('','$pid','$id','$custname','$email','$complaint','$tokennumber','$sd','$st','no','yes','new',0,0,1)";

	mysql_query($sqlcrm,$con);
	header("Location:pfc.php");

}
				
				
if(isset($_REQUEST['feedback']))
{
$feedback=$_REQUEST['feedback'];
$prod=$_REQUEST['prod1'];				
		$con=mysql_connect('localhost','root','');
		mysql_select_db('finalerp',$con);
		$email=$_SESSION['email'];
		$date=date('d-m-y');
                $pid=$_GET['pid'];
		//$his=$_SESSION['pcartid'];
		//$hist = implode(",", $his);
		//print_r($hist);
		$sql="INSERT INTO `feedback`(`fno`, `date`, `feedback`, `email`, `pid`, `feedbacktype`, `flag`) VALUES ('','$date','$feedback','$email','$pid','$prod','1')";
		
	mysql_query($sql,$con);
	header("Location:pfc.php");

}
				
		
				?>
