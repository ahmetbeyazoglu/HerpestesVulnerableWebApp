<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Local File Inclusion</title>
    <?php include '../header.php'; ?>
  </head>
  <body>
    <h1>Local File Inclusion Lab</h1>

    <a href="index.php">Home</a> /
    <a href="index.php?hero=hero1.php">Hero 1</a> /
    <a href="index.php?hero=hero2.php">Hero 2</a> /
    <a href="index.php?hero=hero3.php">Hero 3</a>

    <hr/>

    <?php

    if (isset($_GET['hero']))
    {
        include $_GET['hero'];
    }
    else
    {
        echo "<p>Main Page</p>";
    }

    ?>
    <div style="margin-top:10%;">
      <?php include '../footer.php'; ?>
   </div>
  </body>
</html>
