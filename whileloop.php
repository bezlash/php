<?php

# WHILE loop

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
		echo "$customers[$k], not Smith<br />";
	}
	$k++;
}   while ($testvar != "yes");

?>