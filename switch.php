<?php

# Switch statements

$custstate = "CA";

switch ($custstate)
{
	case "OR":
		$salestaxrate = 0;
		break;					// The "break" statement is required for each "case" section otherwise the execution of the switch statement
	case "CA":					// does not stop at the desired case section but continues to the next "break" or to the end of the switch statement
		$salestaxrate = 1.0;	// thus outputting the result for where it stops.
		break;
	default:
		$salestaxrate = .5;
		break;		
}

echo "The tax rate for $custstate is £$salestaxrate.";



?>