<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Encrypt Password</title>
</head>

<body>
	
	<?php
	$password = "helloclass";
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	echo("Password: $password <br> Hashed Password: $hashed_password");
	
	?>
	
</body>
</html>