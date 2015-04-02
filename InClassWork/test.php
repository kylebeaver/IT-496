<?php

    $mySalary = 90000;
    $bonus = 7000;
    $mnTax = .25;
    $iaTax = .35;
    $wiTax = .40;
    $myState = "Minnesota";
    $yourState = "Wisconsin";



//This function calculate the income after tax depending on the state
if($myState == "Minnesota")
{
    echo "Minnesota Income After Tax: " . 
        IncomeAfterTax($mySalary,$mnTax);
}

if ($yourState == "Wisconsin")
{
    echo nl2br("\r\nWisconsin Income After Tax:" .    //nl2br means new line to break, \return \newline
        IncomeAfterTax($mySalary, $wiTax));   
}



/* functions*/

    // Calculates the Income including the bonus
    function MyIncome($mySalary,$bonus)
    {
        $total = $mySalary + $bonus;
        return $total;
    }

    //Calculates the income after tax using salary and tax variables
    function IncomeAfterTax($salary, $tax)
    {
        $total = $salary * (1 - $tax);
        return $total;
    }
?>