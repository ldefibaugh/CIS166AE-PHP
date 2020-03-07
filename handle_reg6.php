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
	<?php // Script 6.7 - handle_reg6.php
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
	
	//check the two passwords for equality
	if ($_POST['password']!=$_POST['confirm']) {
		print('<p class="error">Your confirmed password does not match the original password.</p>');
		$okay=false;
	}
	
	//Validate year
	if(is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)){
	
      //check they were born before 2020
      if ($_POST['year']<2020) {
          $age = 2020 - $_POST['year']; //calculate age

      }else{
          print('<p class="error">Either you entered your birth year wrong, or you come from the future!</p>');
          $okay = false;
      }//end of second conditional
		
	
	} else {//else for first conditional
		print('<p class="error">Please enter the year you were born as four digits.</p>');
		$okay = false;
	}//end of first conditional
	
	//validate the terms:
	if(!isset($_POST['terms'])){
		print('<p class="error">You must accept the terms.</p>');
		$okay = false;
	}
	
	//validate the color:
	if ($_POST['color'] == 'red') {
		$color_type = 'primary';
	} elseif 
		($_POST['color'] == 'yellow'){
			$color_type = 'primary';
		}elseif
		($_POST['color'] == 'green'){
			$color_type = 'secondary';
		}elseif
		($_POST['color'] == 'blue'){
			$color_type = 'primary';
		}elseif
		($_POST['color'] == 'magenta'){
			$color_type = 'secondary';
		}elseif
		($_POST['color'] == 'purple'){
			$color_type = 'secondary';
		}else{
			print('<p class="error">Please select your favorite color.</p>');
		}
	
	
	// If there were no errors, print a success message:
	if ($okay) {	
		print("<p>You have been successfully registered (but not really).</p>");
		print("<p>You will turn $age this year.</p>");
		print("<p>Your favorite color is a $color_type color.</p>");
	}
	?>
</body>
</html>