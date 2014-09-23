<?php

# If else statements

$team = "Liverpool";

if($team == "Liverpool")
	{
		$favteam = "Liverpool";
		$message = "You'll never walk alone";
	}
elseif($team == "Chelsea")
	{
		$favteam = "Chelsea";
		$message = "Blue scummy south London team";
	}
elseif($team = "Arsenal")
	{
		$favteam = "Arsenal";
		$message = "Spend some money Wenger!";
	}
else
	{
		$favteam = "Not specified";
		$message = "If you don't have a team at least you won't have heartache";
	}

echo "$message<br />";

echo "<br /><br />";



# Nested if statement

$custstate = "ID";
$emailadd = "g";

if( $custstate == "ID" )
	{
		if( $emailadd != "" )
			{
				$contactmethod = "email";
			}
			else
			{
				$contactmethod = "letter";
			}
	}
else
	{
		$contactmethod = "None needed";
	}

echo "Contact method: $contactmethod";





?>