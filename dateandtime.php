<?php

#Today's date
	
	date_default_timezone_set("Europe/London");

	$todaydate = date("g:ia  l d/m/y");

	echo $todaydate;

	echo "<br /><br />";

#timestamp

	$time = strtotime("Today");

	echo $time;

	echo "<br /><br />";

	$impdate = strtotime("2 weeks ago");

	echo $impdate;

	echo "<br />";

	$timeelapsed = (($time - $impdate)/60)/60;

	echo "<p>Time elapsed $timeelapsed</p>";
	

#time function

	$thetime = time();

	echo $thetime;

	echo "<br /><br />";

#Using dates with mysql

	$today = date("Y-m-d");

	echo $today;

	echo "<br /><br />";

	$dateofimportance = date("Y.m.d",strtotime("Jan 15 2009"));

	echo $dateofimportance;


?>