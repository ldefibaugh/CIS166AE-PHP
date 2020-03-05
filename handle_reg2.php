<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <style type="text/css" media="screen">
	  .error { color: red;}
  </style>
</head>

<body>
	<h1>Registration Results</h1>
	<?php // Script 6.3 - handle_reg2.php
	/* This script recieves seven values from register.html
	email, password, confirm, year, terms, color, submit */
	
	/*Error management - the directions in the book states to enable errors, but the directions for the assignment said to suppress the errors.  The code below surpresses errors.  To enable, the ini_set would have a 1 instead of 0, and the error_reporting would have E_ALL instead of 0. */
	
	ini_set('display_errors',0); //hides errors from user
	error_reporting(0); //no error reporting
	
	
	// Flag variable to track success:
	$okay = true;
	
	//validate email address
	if (empty($_POST['email'])) {
		print('<p class="error">Please enter your email address.</p>');
		$okay = false;
	}
	
	//validate password
	if (empty($_POST['password'])) {
		print('<p class="error">Please enter your password.</p>');
		$okay = false;		
	}
	
	// If there were no errors, print a success message:
	if ($okay) {	
		print '<p>You have been successfully registered (but not really).</p>';
	}
	
	?>
	
</body>
</html>