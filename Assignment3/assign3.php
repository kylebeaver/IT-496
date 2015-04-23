<?php

//Kyle Beaver

/* This program fills 2 objects with information from a manually made array.
    The first is a person object and the second is an address object */

    //Require the object reference code in order to use them
    require 'person.php';
    require 'address.php';

    //Create instances of our needed objects
    $person = new Person;
    $address = new Address;
    
    //My information manually put into an array
    $myArray = array("Kyle","Beaver", "23", "234 Bunting ln", "Mankato", "MN", "56001");

    //Populate both objects
    $person->firstName = $myArray[0];
    $person->lastName = $myArray[1];
    $person->age = $myArray[2];

    $address ->street1 = $myArray[3];
    $address ->city = $myArray[3];
    $address ->state = $myArray[3];
    $address ->zipCode = $myArray[3];

    //Neatly print
    echo '<pre>';
    print_r($myArray);
    echo '</pre>';
?>