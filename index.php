<!DOCTYPE html>
<html>

<head><title>Hello world</title></head>

<body>

<?php

define("CONSTANT","ABC Petworld");

echo CONSTANT;

?>

<br />

<?php

	unset($age);
 
	echo @$age;

	$age = 20;

	echo "$age<br />";
?>



</body>

</html>