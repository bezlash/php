<?php

# The FOR loop

for($i=1; $i<=3;$i++) 					// Sets up a counter.  The 1st part in the brackets sets the starting value and assigns it to a variable.
	{									// The second part sets the ending condition, so while this condition is true the FOR loop will run.
		echo "$i. Hello World!<br />";  // The third part increments the counter
	} 
	
echo "<br />";

# Using FOR loop for an array	

$customername = array("John Smith","Ali Akbar","Wafa Hussein");

for($i=0;$i<5;$i++) 					// As this array only has three values and the endingcondition of the loop is set to five you'll get
{										// a notice displayed on the page to notify you of this.  Therefore good to use sizeof() function as below
	echo "$customername[$i]<br />";
}

echo "<br /><br />";



for($i=0;$i<sizeof($customername);$i++)  // Note the sizeof($customername) function that makes use of the array variable $customername. 
{
	echo "$customername[$i]<br />";      // Rather than using a numeric key in the [] we use the variable set in the FOR loop.
}



?>