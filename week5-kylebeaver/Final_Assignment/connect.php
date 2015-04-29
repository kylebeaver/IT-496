<?php

    //connect to a database
    
    //localhost, username, password, dbname
    $db = new mysqli("127.0.0.1","root","","store");
   
    //if connect doesn't work kill the program and display error message
    if($db->connect_errno)
    {
        die("Please contact your system admin");  
    }
?>