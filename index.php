<?php 
	include 'db.php';
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	
	$sql = "INSERT INTO users ( username, email, password) VALUES ('$username', '$email', '$password' )";
	global $connection;
	$result = mysqli_query( $connection, $sql);

	var_dump($result);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<h1>Add New User</h1>
	<form action="index.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" type="text" name="username" placeholder="Enter a username" id="username">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="Email" name="email" placeholder="Enter a Email" id="email">
		</div>
		<div class="form-group">
			<label for="password">password</label>
			<input class="form-control" type="password" name="password" placeholder="Enter a password" id="password">
		</div>
		<input type="submit" name="submit" value="Add user" class="btn btn-primary">
		
	</form>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>