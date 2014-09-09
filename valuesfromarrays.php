<?php

# Getting values from arrays

$capitals['LO'] = "London";
$capitals['RO'] = "Rome";
$capitals['PA'] = "Paris";

echo $capitals['PA']; //This echo's the value assigned to the PA key

echo "<br /><br />";

$bestcity = $capitals['LO']; // Assign a value to a variable

echo $bestcity; 

echo "<br /><br />";

# Select several values from array using List statement.  The list statement turns array values into variables.

$shirtinfo = array("blue", "large", 12.00);
list($firstvalue,$secondvalue) = $shirtinfo; //This take the first two values in the array and assigns them to a variable.
echo $firstvalue;

	/* The list statement above carries out the same function as:
		$firstvalue=$shirtinfo[0];
		$secondvalue=$shirtinfo[1];
	 */

echo "<br /><br />";

rsort($shirtinfo);  //Note the rsort function changes the order of the array values and therefore changes the list() assigned variables.
list($firstvalue,$secondvalue) = $shirtinfo;
echo $firstvalue;

echo "<br /><br />";

# Retrieve all values from an array with words as keys using Extract

$shirtinfo = array("color"=>"blue","size"=>"large","price"=>12.00);
extract($shirtinfo); //Extracts all the keys as a variable
echo "size is $size, color is $color, price is $price";



?>