<?php
    session_start();
    session_unset(); //removes the session variables
    session_destroy(); //destroys the actual session itself
    header("Location:login.php"); //redirect to login
?>