<?php

# Functions

function peaceandlove()        // Start the function
{				   // Block of statements
	echo "Peace and love";
}

peaceandlove();		   // Call the function

echo "<br /><br />";



# Using variables in functions

function liverpoolwinger()
{
	$first_name = "Raheem";			// Variables inside functions are local to the function and therefore cannot be by default used outside.
	$last_name = "Sterling";
	$name = $first_name." ".$last_name;
	echo "$name (Inside function)<br />";
}

liverpoolwinger();

echo $name;						// This variable is being called on outside the function therefore you'll receive an Undefined variable Notice.

echo "<br /><br />";

function liverpoolstriker()
{
	$first_name = "Daniel";
	$last_name = "Sturridge";
	global $name;					// This line states that the variable be global and therefore able to use outside that function.
	$name = $first_name." ".$last_name;
	echo "$name (Inside function)<br />";
}

liverpoolstriker();

echo $name;

echo "<br /><br />";



?>