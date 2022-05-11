<?php

    $servername = "localhost";
    $username = "herpestes";
    $password = "112263ABC";

    try{
      $conn = new PDO("mysql:host=$servername;herpestes=myDB", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    }catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>
