<?php
//Kyle Beaver
//Final Assignment
//Manipulates data in mysql admin

    //Connect to the 'connect.php' document in order to access the database
	require 'connect.php';

    //EXTRA CREDIT - adding sort functionality - ordering by the id but desc instead of asc
	$result = $db->query("SELECT * FROM Inventory ORDER BY Inventory_Id Desc");

    //Display the table
	while ($row = $result->fetch_assoc()){
		echo '<pre>', $row["Inventory_Id"], " ", $row["Part_Number"], " ", $row["Quantity"], " ", $row["Price"], " ", $row["Date_Updated"], '</pre>';
	}


    //These are the functions used to modify the table, copy paste into myAdmin SQL if you want to test them

    //alter table Inventory change Date_Recieved Date_Updated varchar (255) ;
    //alter table Inventory modify description VARCHAR(20);
?>