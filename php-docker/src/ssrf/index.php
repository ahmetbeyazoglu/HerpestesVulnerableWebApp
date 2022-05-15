<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
  <?php include '../header.php'; ?>
<?php

if(isset($_GET ['url'])){
    $url= $_GET['url'];
    $image = fopen($url, 'rb');
    //header("Content-Type: image/png");
    fpassthru($image);
}
?>
<html>
  <body>
    <center><h1>THE IMAGE DOWNLOADER</h1></center>
    <br><br><br><br><br>
    <center>
        <form action='.' method='GET'>
            ENTER THE IMG URL:<input type='text' name='url'>
              <br><br>
            <input type='submit'>
          </center>
        </form>
  </body>
     <div style="margin-top:10%;">
   <?php include '../footer.php'; ?>
</div>
</html>
