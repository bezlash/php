<?php

# Passing values to a function

function compute_sales_tax($amount,$custState)  // The function statement includes variable names for the values it's expecting.
{
	switch ($custState)
	{
		case "OR":
			$salestaxrate = 0;
			break;
		case "CA":
			$salestaxrate = 1.0;
			break;
		default:
			$salestaxrate = .5;
			break;
	}
	$salestax = $amount * $salestaxrate;
	echo "$salestax<br />";
	return;
}
$cost = 2000.00;
$custState = "PP";
compute_sales_tax($cost,$custState);  // This function call passes two values to the function.  The value of the $cost variable is passed onto the $amount variable and used in the function
compute_sales_tax(1000,"OR");         // You can pass it on like this also.  The values can be variables, value including calculated values.
compute_sales_tax(2*100,"PP");	   // Note: This one passes a calculated value and the default switch case.	   

$arrayofnumbers = array(100, 200);
$addarrayofnumbers = addnumbers($arrayofnumbers);
compute_sales_tax($addarrayofnumbers,"CA");	

?>