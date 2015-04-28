

<?php
/*This program finds the area, perimeter, sine, cosine, and tangent
of a triangle given the angles and sides*/

//Author: Kyle Beaver
//Class: IT 496

//Prints Sides
echo "Side1 = " . $side1 = 14.8;
echo nl2br("\r\n Side2 = " . $side2 = 20.3);
echo nl2br("\r\n Side3 = " . $side3 = 25.3 . "\n");

//Prints Angles
echo nl2br("\r\n Angle1 = " .$angle1 = 36);
echo nl2br("\r\n Angle2 = " .$angle2 = 53);
echo nl2br("\r\n Angle3 = " .$angle3 = 91 . "\n");

//Prints various found values
echo nl2br("\r\n Area = " . Area($side1,$side2,$side3). "\n");
echo nl2br("\r\n Perimeter = " . Perimeter($side1,$side2,$side3). "\n");
echo nl2br("\r\n Sine(In radians) = " . Sine($angle1). "\n");
echo nl2br("\r\n Cosine(In radians) = " . Cosine($angle1). "\n");          //Currently printing results for angle1
echo nl2br("\r\n Tangent(In radians) = " . Tangent($angle1));              //Enter different angle to test others


//Using Heron's formula to find the area of a triangle without a known height
function Area($side1,$side2,$side3)
{
    $constant = ($side1 + $side2 + $side3)/2;
    
    $area = sqrt($constant * (($constant - $side1)*($constant - $side2)*($constant - $side3)));
    
    return $area;
}

//Returns the perimeter of a triangle
function Perimeter($side1,$side2,$side3)
{
        $perimeter = $side1 + $side2 + $side3;
        return $perimeter;
}
//Returns the sine of a triangle
function Sine($angle)
{
        $sine = sin(deg2rad($angle));
        return $sine;  
}
//Returns the cosine of a triangle
function Cosine($angle)
{
        $cosine = cos(deg2rad($angle));
        return $cosine;  
}
//Returns the tangent of a triangle
function Tangent($angle)
{
        $tangent = tan(deg2rad($angle));
        return $tangent;  
}
?>