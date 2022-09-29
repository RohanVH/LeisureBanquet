<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];	
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM signup WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO signup VALUES ('$username', '$email', '$password','$cpassword')";
			$result = mysqli_query($con, $sql);
			if ($result) {
                $sql = "INSERT INTO login VALUES ('$email', '$password')";
			    $res = mysqli_query($con, $sql);
                if ($res){
				    header("Location: index.html");
                }
			} 
            else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Already Exists.')</script>";
		}
		
	} 
	else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
