<?php

#Sorting arrays with numerical keys

$pets = array("dragon","ape","spider","elephant","zebra");

echo "<pre>";
print_r($pets);
echo "<pre>";

echo "<br /><br />";

sort($pets); // This sorts the array Values alphabetically and assigns new keys to each value.

echo "<pre>";
print_r($pets);
echo "</pre>";

echo "<br /><br />";

#Sorting arrays with word keys

$capitals = array("RO" => "Rome","LO" => "London","PA" => "Paris");

echo "<pre>";
print_r($capitals);
echo "<pre>";

asort($capitals); //The asort() function sorts the capitals by value but retains there original key.  Applies to word and number keys though it's rare that you'll want to retain numerical key to a value.

echo "<pre>";
print_r($capitals);
echo "<pre>";


#If you use the sort() function rather than asort() for word keys the value get sorted alphabetically but the keys get replaced with numbers starting from 0.

sort($capitals);  //Sorting word keys with sort() mens you cannot use the old keys anymore.

echo "<pre>";
print_r($capitals);
echo "<pre>";

echo $capitals['LO']; //This throws up an error
echo "<br /><br />";
echo $capitals[0];


?>