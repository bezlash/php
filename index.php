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

	$age = 22;

	unset($age); //This unsets the $age variable without effecting it's use in prior sections of code
 
	echo @$age; //Without using the @ symbol we would receive an error msg as the variable we are trying to echo has been unset.

	$age = 20;

	echo "$age<br />";
?>



</body>

</html>