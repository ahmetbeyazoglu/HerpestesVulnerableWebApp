<?php
// Initialize the session
if(isset($_SESSION))
{
  session_destroy();
}
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>

IronMan1
