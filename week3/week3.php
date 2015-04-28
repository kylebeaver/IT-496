<?php

$testArray = array(1,2,3);
$stringArray = array("one", "two", "three");
    
//echo $testArray[0];
//echo "<br/>";
//echo $stringArray[2];


$x = 1;
echo "<br/>";
/*
do
{
    echo "This is the value:" . $x;
    $x++;
    echo "<br/>";
}
while($x<=9);


for($i = 0; $i<=10; $i++)
{
    echo "This is the value" . $i . "<br/>";
}
*/


foreach($stringArray as $y)
{
    echo "This is the value: " . $y . "<br/>";
}

$var = "dog";

switch($var)
{
    case "cat":
    echo "this is a cat";
    break;
    
    case "horse":
    echo "This is a horse";
    break;
    
    case "dog":
    echo "this is a dog";
    break;
}

?>