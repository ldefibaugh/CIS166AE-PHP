<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>

<body>
	
	<?php //Script 5.5 - handle_post4.php
		/* This script recieves five values from posting.html
		first_name, last_name, email, posting, submit */
	//get the values from the $_Post array:
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$posting = nl2br($_POST['posting'],false);
	
	//create a full name variable
	$name = $first_name . " " . $last_name;
	
	//print a message:
	print "<div>Thank you, $name, for your posting:
	<p>$posting</p></div>";
	
	//Make a link to another page:
	$name = urlencode($name);
	$email = urlencode($_POST['email']);
	print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

	
	?>
		

</body>
</html>