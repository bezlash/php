<?php

# Multidimensional Arrays i.e. Arrays with more than one key.  This creates an array of arrays.

//Create the Array

$productprice['clothing']['shirt'] = 20.00;
$productprice['clothing']['socks'] = 3.00;
$productprice['linen']['sheets'] = 30.00;
$productprice['footwear']['shoes'] = 80.00;
$productprice['linen']['pillowcase'] = 10.00;
$productprice['footwear']['trainers'] = 100.00;

$trainerprice = $productprice['footwear']['trainers']; // store an array item as a variable

echo $trainerprice;

echo "<br/><br/>";

echo $productprice['clothing']['socks']; // access the array item directly without storing it in an ARRAY_AS_PROPS

echo "<br/><br/>";

echo "The price of the trainers are £$trainerprice";

echo "<br/><br/>";

echo "The price of the pillowcase is £{$productprice['linen']['pillowcase']}"; // Note the curly brackets around the array item.  This is because 
																			   //the whole sentence is and needs to be enclosed in double quotes

echo "<br/><br/>";



foreach($productprice as $category) // This is called a two-dimensional array as it has two arrays therefore needs to foreach statements.
{
	foreach($category as $product => $price)
		{
			
			echo "$product = £$price<br />";
		}	
}



?>