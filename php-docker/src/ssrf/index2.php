<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php

if(isset($_GET ['url'])){
    $url= $_GET['url'];
    $check=parse_url($url);
    if($check["scheme"]==null){
        die('NO protocal present : request error');
    }
    $image = fopen($url, 'rb');
    header("Content-Type: image/png");
    fpassthru($image);
}

?>
<html>
<title></title>
  <body>
    <center><h1>THE IMAGE DOWNLOADER</h1></center>
      We are checking protocol now
      <br><br><br><br><br>
      <center>
          <form action='.' method='GET'>
            ENTER THE IMG URL:<input type='text' name='url'>
            <br><br>
          <input type='submit'>
      </center>
    </form>
  </body>
</html
