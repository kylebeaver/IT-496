<?php

//array
$testArray = array(1, 2, 3);
$stringArray = array("one", "two", "three");

/*do-while
*do this while the condition is true
*/

$x = 1;
do 
{
//what you're actually doing
//echo "This is the value: " . $x . "<br/>";
$x++;
//$x = $x + 1;
//$x += 2;
}
//while this condition is true
while ($x <= 9);

//for loop
for($i=0; $i <=1;$i++)
{
	//echo "This is the value: " . $stringArray[$i] . "<br/>";
}

//foreach
$colorArray = array("red", "blue", "yellow", "green");
foreach($colorArray as $y)
{
	//echo "This is the value: " . $y . "<br/>";
}

$var = "dog";

switch ($var) {
	case "cat":
	echo "This is a cat";
	break;

	case "horse":
	echo "This is a horse";
	break;

	case "dog":
	echo "This is a dog";
	break;

}


?>