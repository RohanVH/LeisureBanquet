<?php
session_start();
include 'config.php';
$email=$_POST['email'];
$password=$_POST['password'];
if (isset($_POST['submit']))
	$sql="select * from login";
	$result=mysqli_query($con,$sql);
	
	while ($row=mysqli_fetch_assoc($result))
	{
		if($row['email']==$email && $row['password']==$password){

			// header("Location: loading_page.php");
			header("Location: Homepage.php");
	}
	}
	
		
	

?>