<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	global $connection;
	if(is_null($connection)){
		$connection = mysqli_connect('localhost','root','','cms');
	}
	 ?>
</body>
</html>