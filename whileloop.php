<?php

# WHILE loop

$customers = array("huang","smith","Akbar");  // Array
$testvar = "no";  							  // Test variable	
$k = 0;										  // Counter
while($testvar != "yes")					  // While condition. $testvar does not equal yes.	
{
	if ($customers[$k] == "smith")			  // Note the counter that's set as 0 therefore will pick first array value	
	{
		$testvar = "yes";						
		echo "Smith<br />";
	}
	else
	{
		echo "$customers[$k], not Smith<br />";
	}
	$k++; 									  // Adds 1 to the counter
};

echo "<br /><br />";

# DO WHILE loop

$customers = array("huang","smith","Akbar");
$testvar = "no";
$k = 0;
do
{
	if ($customers[$k] == "smith")
	{
		$testvar = "yes";
		echo "Smith<br />";
	}
	else
	{
		echo "$customers[$k], not smith<br />";
	}
	$k++;
} while($testvar != "yes");

# Difference between while and do while loops is where the condition is tested.  In a while loop it's tested at the beginning therefore
# If it's false the loop will not run at all.  A do while loop tests the condition at the end of the loop therefore will run at least once
# Whether the condition is true or false.

 	

  

?>