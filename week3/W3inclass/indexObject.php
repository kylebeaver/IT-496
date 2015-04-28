<?php
    require 'person.php';
    require 'address.php';

    $person = new Person;
    $address = new Address;

    echo $person->firstName = "Kyle";
    echo nl2br("\r\n" . $person->lastName = "Beaver");
    echo nl2br("\r\n" . $person->Age = "23");

    echo nl2br("\r\n" . $address->street = "234 Bibbily ln");
    echo nl2br("\r\n" . $address->city = "Mankato");
    echo nl2br("\r\n" . $address->state = "MN");
    echo nl2br("\r\n" . $address->zipCode = "56001");

    

?>