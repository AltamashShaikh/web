<?php
session_start();
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

if(isset($_REQUEST['login']))	
	{
	$supp=@$_REQUEST['supplier'];
	$username=$_POST['un'];
	//echo $username;
	$password=$_POST['pd'];
	//echo $password;
	if($supp!='supplier')
	{
if($username!=""&&$password!="")
{
$dbname='finalerp';
$con=connect($dbname);	
$check=$res=mysql_query("SELECT * FROM `customer` WHERE `custname`='$username' AND `custpassword`='$password'");
if($row=mysql_fetch_array($check))
{
$_SESSION['pcartid']=array();
$_SESSION['user']=$row['custname'];
	$_SESSION['email']=$row['custemail'];
	$sess=$row['history'];
	//echo $sess."</br>";
$_SESSION['pcartid']=explode(",",$sess);
//	print_r($_SESSION['pcartid']);
	//echo "doe"; 
header('location: index.php');
//$flag=1;	
}
else
{
echo "<h3>Invalid Username or password</h3>";
//$flag=0;
}
}else
{
echo '<h3>Please Enter Username and Password</h3>';
//$flag=0;
}
}else
{
if($username!=""&&$password!="")
{
$dbname='finalerp';
$con=connect($dbname);	
$check=$res=mysql_query("SELECT * FROM `suppliers` WHERE `supname`='$username' AND `suppass`='$password'");
if($row=mysql_fetch_array($check))
{
$_SESSION['user']=$row['supname'];
	$_SESSION['email']=$row['supemail'];
	//$sess=$row['history'];
	//echo $sess."</br>";
//$_SESSION['pcartid']=explode(",",$sess);
//	print_r($_SESSION['pcartid']);
	//echo "doe"; 
header('location: loginsuccesfulforsupplier.php');
//$flag=1;	
}
else
{
echo "<h3>Invalid Username or password</h3>";
//$flag=0;
}
}else
{
echo '<h3>Please Enter Username and Password</h3>';
//$flag=0;
}
}
}

if(isset($_REQUEST['logout'])) 
{
$dbname='finalerp';
$con=connect($dbname);
		$email=$_SESSION['email'];
		$his=$_SESSION['pcartid'];
		$hist = implode(",", $his);
		$sql="update `customer` set `history`='$hist' where `custemail`='$email'";
		
		mysql_query($sql,$con)or die(mysql_error());
		session_destroy();
		header("Location:index.php");
	}

if (isset($_REQUEST['signup'])) 
{
	$username=$_REQUEST['uname'];
	$password=$_REQUEST['pass'];
	$sex=$_REQUEST['sex'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$supplier=@$_REQUEST['supplier'];
	
	if($supplier!='supplier')
	{
	$dbname='finalerp';
	$con=connect($dbname);
	mysql_query("INSERT INTO `customer`(`custid`, `custname`, `custgender`, `custphone`, `custemail`, `custpassword`, `history`) VALUES ('','$username','$sex','$phone','$email','$password','')"
	,$con) or die(mysql_error());
	$_SESSION['user']=$username;
	$_SESSION['email']=$email;
	$_SESSION['pcartid']=array();
	header('Location:index.php');
	}
	else
	{
	$dbname='finalerp';
	$con=connect($dbname);
	 mysql_query("INSERT INTO `suppliers`(`supid`, `supname`, `supadd`, `supstate`, `supcity`, `supcontact`, `supemail`, `suppass`)VALUES ('','$username', 'ADDRESS','STATE','CITY','$phone','$email','$password')",$con) or die(mysql_error());
	$_SESSION['user']=$username;
	$_SESSION['email']=$email;
	
	header('Location:loginsuccesfulforsupplier.php');
	
	}
}

if(isset($_REQUEST['signupajax']))
{
$name=$_GET['name'];
if($name!="")
{
$dbname='finalerp';
$con=connect($dbname);	
$res=mysql_query("select * from `customer` where custname='$name'",$con);
if(@mysql_num_rows($check)>0)
{
echo 'Sorry!!! choose another USERNAME!! it belongs to someone else.';	
}
else
{
echo "This username is available";
}
}else
{
echo 'Username is empty';
}
}
?>