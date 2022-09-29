<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	
</head>
<body>
	
<?php
$number=$_GET['number'];
// $number=5;
 
	print_r("<table style='border:solid;'><th>Multiplication Table of ".$number."</th></tr>");
	for ($i = 1; $i <= 10; $i++) {
		$res="<tr><td>$number". " X " . "$i" . " = ". $number * $i ."</td></tr>";
		print_r($res);
	}
	print_r("</table>")
	
?>
</body>

</html>

