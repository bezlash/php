<!DOCTYPE html>
<html>

<head>

</head>

<body>

<?php

	$string = "It is tom\'s house";
	echo "$string<br />";

	$age = 29;
	$result1 = "$age";
	$result2 = '$age';
	echo "$result1<br />";
	echo "$result2<br />";

	$singlequote = 'string in \tsingle quote';
	$doublequote = "string in \t double quote";

	echo $singlequote;
	echo "<br />";
	echo $doublequote;
	echo "<br />";
?>

<?php

	$stringall = $singlequote." ".$doublequote;
	echo $stringall;
	echo "<br />";
	
	$addcharacter = "Liverpool";
	$addcharacter .=" FC";
	$addcharacter .=" are the best";
	$addcharacter .=" YNWA";
	echo $addcharacter;
?>

</body>

</html>