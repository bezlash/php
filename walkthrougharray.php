<?php

# Walking through an array and doing something to each value is iteration or traversing.

# Manual iteration

$capitals = array("LO"=>"London","PA"=>"Paris","RO"=>"Rome","LI"=>"Lisbon","MA"=>"Madrid");

reset($capitals); //Ensures that the pointer is at the first element.

$value = current ($capitals); //sets the $value variable as the current array element, which should in this instance be the first one
echo "$value<br />";
$value = next ($capitals); //sets the $value variable as the next array element i.e. second one
echo "$value<br />";
$value = next ($capitals);
echo "$value<br />";
$value = end ($capitals); //sets the $value variable as the last array element
echo "$value<br />";

echo "<br /><br />";

# Using foreach

$capitals = array("LO"=>"London","PA"=>"Paris","RO"=>"Rome","LI"=>"Lisbon","MA"=>"Madrid");

ksort($capitals); //sorts the array by key retaining value

foreach($capitals as $cityinitials => $city) // The $cityinitials => $city signifies and uses the key/value relationship
{
	echo "$city, $cityinitials<br />";
}

	/* The format is:

		foreach($arrayname as $keyname => $valuename)
		{
			block of statements;
		}
	*/

echo "<br /><br />";

# To make just the value available for output:

foreach($capitals as $city)
{
	echo "$city<br />"; // The <br /> linebreak adds a line break for each value output
}

echo "<br /><br />";

#Picked up over a week later so below is for practice of above

$cars = array("B"=>"BMW","M"=>"Mercedes-Benz","A"=>"Audi","H"=>"Honda");

ksort($cars);

foreach($cars as $model)
{
	echo "$model<br />";
}	

echo "<br /><br />";

krsort($cars);

foreach($cars as $carcode => $model)
{
	echo "$carcode, $model<br />";
}

echo "<br /><br />";

reset($cars);

$manual = current ($cars);
echo "$manual<br />";
$manual = next ($cars);
echo "$manual<br />";
$manual = end ($cars);
echo "$manual<br />";


?>