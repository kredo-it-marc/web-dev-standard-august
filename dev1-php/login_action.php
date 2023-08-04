<?php

    // isset() => returns TRUE if the variable has a value. Otherwise, FALSE
    //$_GET => used to get values from the URL
    // btn_submit => name of the URL variable
    if( isset($_GET["btn_submit"]) )
    {
        //if-block
        // The code here only runs if the condition is TRUE
        
        //INPUT
        $username = $_GET["username"];
        $password = $_GET["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }

    //$_POST => for post method

    if( isset($_POST["btn_submit"]) )
    {
        //INPUT
        $username = $_POST["username"];
        $password = $_POST["password"];

        //OUTPUT
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    }
?>