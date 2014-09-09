<?php
#Arrays are complex variables

$pets[1] = "Dragon";  //They have the same variable name $pets but the keys are assigned using the numbers.
$pets[2] = "Dinosaur";
$pets[3] = "Elephant";

echo  $pets[1];
echo "<br /><br />";

unset ($pets);

#Shortcuts for writing this type of array

$pets[] = "Dragon"; //This works if you want to assign numerical keys to each array option. The first one is 0 and increments by 1.
$pets[] = "Dinosaur";
$pets[] = "Elephant";

echo $pets[2];
echo "<br /><br />";

unset ($pets);

$pets = array( "Dragon","Unicorn","Elephant"); //This is another way to create an array and is the shortest. The keys are assigned in the same way as above.
echo $pets[1];
echo "<br /><br />";

#Setting array keys as characters

$capitals['LO'] = "London"; //Note the key needs single quotes as its a character.  Otherwise its the same as a number key.
$capitals['PA'] = "Paris";
$capitals['RO'] = "Rome";

echo "The best european city is {$capitals['LO']}";  //If you are including the array in a longer echo that is encapsulated by quotes you'll need to surround the array in curly brackets.
echo "<br /><br />";

unset($capitals);

#Shortcut for character array

$capitals = array( "LO" => "London", "PA" => "Paris", "RO" => "Rome" );
echo $capitals['PA'];
echo "<br /><br />";
echo "The second best european city is {$capitals['RO']}";
echo "<br /><br />";

#To see the array structure

print_r($capitals); //This shows the keyand values
echo "<br /><br />";
var_dump($capitals); //The var_dump shows the data type and length of strin gin addition to the keys and values
echo "<br /><br />";

echo "<pre>"; //The browser returns the var_dump in html in one long line.  Tell the browser to retuen it as it received in its structured format by using the <pre> tags before an after the var_dump.
var_dump($capitals);
echo "<pre>";

unset ($capitals['PA']); //This unsets a key/value from your arrayand removes the string. As you can see from the var_dump below.

echo "<pre>";
var_dump($capitals);
echo "<pre>";





?>