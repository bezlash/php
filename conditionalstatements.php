<?php

#simple if/else conditional statement

	$weather = "hot";

	if ( $weather == "raining" ) {
		echo "Take your umbrella";
	}

	else {
		echo "Take your sunglasses";
	}

	echo "<br /><br />";

#Age comparison

	$age = 13;

	if ($age <= 13)
		$status = "child";
	if ($age > 13)
		$status = "adult";

	echo $status;

	echo "<br /><br />";

#And OR XOR statements

	$age = "100";

	$name = "Chong";

	if (($age == 200 && $name == "Goliath") || ($age == 100 && $name == "Chong")) {

	echo "Statement is true";

	}

	else {

	echo "Statement is false";

	};

	echo "<br /><br />";




	
?>