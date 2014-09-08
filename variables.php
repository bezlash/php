<?php

#Assigning statements

	$number = 2;
	$string = "hello";

	$combined1 = $number + $string; //If you use mathematical functions with characters the character will be evaluated as a 0
	$combined2 = $number . $string;

	echo "$combined1<br />";
	echo $combined2;

	echo "<br /><br />";

#Increment statements

	$counter=0;
	$counter++; //Adds 1 to the counter set as 0 so the echo below would display 1
	echo "$counter<br />";
	$counter++; //This will increment by another one
	echo $counter;

	echo "<br /><br />";

	$counter+=2; //You can carry out arithmetic with the counter also. This statements adds 2.
	echo "$counter<br />";
	$counter*=3; //The variable $counter*=3; would multiply the last figure by three. 
	echo $counter;


?>