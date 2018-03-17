<?php
session_start();
$email=$_SESSION['email'];
$peid=$_REQUEST['peid'];
$pc=$_REQUEST['pc'];
$pn=$_REQUEST['pn'];
$pq=$_REQUEST['pq'];
$ce=$_REQUEST['ce'];
$ia=$_REQUEST['ia'];
$doe=$_REQUEST['doe'];
$dod=$_REQUEST['dod'];
$price=$_REQUEST['price'];
$import=$_REQUEST['import'];
$excise=$_REQUEST['excise'];
$cst=$_REQUEST['cst'];
$date=$_REQUEST['date'];
$total=$_REQUEST['total'];

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

// echo $peid."</br>";
// echo $pc."</br>";
// echo $pn."</br>";
// echo $pq."</br>";
// echo $ce."</br>";
// echo $ia."</br>";
// echo $doe."</br>";
// echo $dod."</br>";
// echo $price."</br>";
// echo $import."</br>";
$importamt=(($total*$import)/100);
// echo $importamt."</br>";
// echo $excise."</br>";
$exciseamt=(($total*$excise)/100);
// echo $exciseamt."</br>";
// echo $cst."</br>";
$cstamt=(($total*$cst)/100);
// echo $cstamt."</br>";
// echo $date."</br>";
// echo $total."</br>";

connect("xyz");
$sql="INSERT INTO `supplieroffers`(`supid`, `productcode`, `productname`, `qty`, `priceperunit`, `importpercent`, `importamount`, `excisepercent`, `exciseamount`, `cstpercent`, `cstamount`, `total`, `offerid`, `status`, `date`, `offeraccept`,`email`) VALUES ('$peid','$pc','$pn','$pq','$price','$import','$importamt','$excise','$exciseamt','$cst','$cstamt','$total','',1,'$date',0,'$email')";
mysql_query($sql);
header("Location:loginsuccesfulforsupplier.php");

?>