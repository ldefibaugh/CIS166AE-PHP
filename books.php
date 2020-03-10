<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Larry Ullman's Books and Chapters</title>
</head>
<h1>Some of Larry Ullman's Books</h1>
<?php //Script 7.4 - books.php
	/* This script creates and prints out a multi-dimensional array */
	
	//Error Management: diplay errors for troubleshooting - 
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	//Create first array:
	$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'];
	
	//Create second array:
	$phpadv = [1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Basic Object-Oriented Programming'];
	
	//Create third array:
	$phpmysql = [1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Websites', 'Introduction to MySQL'];
	
	//Create multidimensional array:
	$books = [
		'PHP VQS' => $phpvqs,
		'PHP Advanced VQP' => $phpadv,
		'PHP and MySQL VQP' => $phpmysql
		];
	
	// Print out some values
	print("<p>The third chapter of my third book is <i>{$books['PHP VQS'][3]}</i>.</p>");
	print("<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>");
	print("<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>");
	
	
	// See what happens wiht foreach:
		foreach ($books as $key => $value) {
			print("<p>$key: $value</p>\n");
		}
	
	// Nesting foreach loops:
	
	print("<br><h3>Multi-dimensional array printed with nested foreach loops:</h3>");
	
		foreach ($books as $title =>$chapters) {
			print("<p>$title");
			foreach ($chapters as $number => $chapter) {
				print("<br />Chapter $number is $chapter");
			}
			print('</p>');
		}
?>
<body>
</body>
</html>