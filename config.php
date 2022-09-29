<?php
$server='127.0.0.1';
$username='root';
$password='';
$dbname='lbq';
$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
	header("Location: Homepage.php");
else
	echo "Error";
?>