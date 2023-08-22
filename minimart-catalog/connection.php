<?php
    function connection()
    {
        $server = "localhost";
        $username = "marc"; //"root" XAMPP and MAMP
        $password = "password"; //"root" for MAMP, "" for XAMPP 
        $db_name = "minimart_catalog";
    
        $dbConnection = new mysqli($server, $username, $password, $db_name);
    
        if($dbConnection->connect_error)
        {
            die("Connection failed: ". $dbConnection->connect_error);
        }
        else
        {
            // echo "Connection Successful";
            return $dbConnection;
        }
    }
?>