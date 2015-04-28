

<?php
//Kyle Beaver
/* This program grabs a text file and sorts it into numbers and strings
*/


//Get text file into an array
$lines = array_map('rtrim', file('input.txt'));

//print the entire array
echo '<pre>' . "This is the original "; 
print_r($lines); 
echo '</pre>';

//Call function to split the array
list($array_int, $array_str) = arraySplit($lines);

//Print the new arrays
echo '<pre>' . "This is the numeric ";
print_r($array_int);
echo ('</pre>');

echo '<pre>' . "This is the string ";
print_r($array_str);
echo '</pre>';


//This function splits the array into numbers and strings
//It also sorts the new arrays in descending/aphabetical order
function arraySplit($in)
{
	$num = array();
	$string	= array();
	foreach ($in as $item)
    {
		if(is_numeric($item)) 
        {
			array_push($num, $item);
		}
        else
        {
			array_push($string,$item);
		}
	}
	sort($num);
	sort($string);
	return array( $num, $string);
}

?>