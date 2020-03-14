<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
<?php
	//Script 7.5 - sort.php
	/* This script creates, sorts, and prints out an array */
	
	//Error Management: diplay errors for troubleshooting - 
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	// Create the array
	$grades = [ 
		'Richard' => 95,
		'Sherwood' => 82,
		'Laura' => 99,
		'Franz' => 87,
		'Melissa' => 75,
		'Roddy' => 85
	];
	
	//Print out the original array:
	print '<p>Originally the array looks like this: <br>'; 
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br>\n";
	}
	print '</p>';
	
	//sort by value in reverse order, then print again:
	arsort($grades);
	print '<p>After sorting the array by value using arsort(), the array looks like this: <br>'; 
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br>\n";
	}
	print '</p>';	
?>
	
</body>
</html>