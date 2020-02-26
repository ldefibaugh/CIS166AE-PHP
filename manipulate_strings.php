<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	
	<?php
	

	echo("<p><b>Beginning String:</b> Laura Jane Defibaugh</p>");
	
	//only returns the string in the second argument and anything after it. This should return Jane and Defibaugh
	echo("<b>strstr function:</b> Find the first occurrence of a 'Jane' inside the string and return the rest of the string:<br>");
	echo(strstr("Laura Jane Defibaugh","Jane"));
	
	//returns everything after the value in the second argument, unless the third argument value is there.  The third value designates how many characters to return. This whould return the last name, as the 11th character is the space before Defibaugh.
	echo("<br><br> <b>substr function:</b> returns the part of the string with start number value of 11 and if designated, the length of string to return:<br>");
	echo(substr("Laura Jane Defibaugh",11));
	
	//relpaces string within a string.  First argument is the string, second is where the replacement starts, and third is how many characters to replace.  Negative values start from right instead of from the left. This is repacing starting at the first character, and replaces the first 5 characters.  It should output Sarah Jane Defibaugh.
	echo("<br><br> <b>substr_replace function:</b> Replace 'Laura' with 'Sarah':<br>");
	echo(substr_replace("Laura Jane Defibaugh","Sarah",0,5));	
	?>
	
</body>
</html>