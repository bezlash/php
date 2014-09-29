<?php

# Two ways to break out of a loop, "break" and "continue"

# Break loop

$counter = 0;
while($counter < 5)
{
	$counter++;
	if($counter == 3)
	{
		echo "break<br />";
		break;
	}
	echo "End of loop: counter=$counter<br />";
}
echo "After break loop<br />";

echo "<br /><br />";

# continue

$counter = 0;
while($counter < 5)
{
	$counter++;
	if($counter == 3)
	{
		echo "continue<br />";
		continue;
	}
	echo "End of loop: counter=$counter<br />";
		
}
echo "After continue loop<br />";

?>