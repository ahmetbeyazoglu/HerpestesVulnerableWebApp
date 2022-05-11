<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<!-- Basic filter XSS-->
<!doctype html>
<html lang="tr-TR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title></title>

    </head>

  <body>
    <?php include '../header.php'; ?>
    <div style="border: 5px solid red; margin-left:100px; width:300px; height:350px		; margin-top:100px; float:left;">
    <img src="img/Ironman.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px"></a>
    <a href="#"><p>Iron Man</p></a>
    </div>
    <div style="border: 5px solid red; margin-left:150px; width:300px; height:350px; margin-top:100px; float:left;">
    <img src="img/Captainamerica.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
     <a href="#"><p>Captain America</p></a>
    </div>
    <div style="border: 5px solid red; margin-left:200px; width:300px; height:350px; margin-top:100px; float:left;">
    <img src="img/Dag2.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
     <a href="#"><p>Dag II</p></a>
    </div>
    <div style="border: 5px solid red; margin-left:100px; width:300px; height:350px; margin-top:150px; float:left; margin-right:100px;">
    <img src="img/Hulk.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
     <a href="#"><p>Hulk</p></a>
    </div>
    <div style="border: 5px solid red; width:300px; height:350px; margin-top:150px; float:right; margin-right:1000px;">
    <img src="img/Antman.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
     <a href="#"><p>Ant Man</p></a>
    </div>
    <div style="margin-top:20px;">
    Select Level: <a href="xss.php">1</a> | <a href="xss2.php">2</a> | <a href="xss3.php">3</a>
    <div>
    <!--XSS form-->
     <div style="width:50%; margin-left : 80%; margin-top:50px;">
       <form method="post">
        <input  type="text" name="text1" placeholder="SearchArea">
        <input type="submit" name"submit1" value="Search">
       </form>
    </div>
    <div style="margin-left:1300px ; margin-top: 50px;">
    <?php
    error_reporting(0);
    $variable = str_replace('<script>', '', $_POST['text1']);
    echo "<h3>You searched this:</h3>";
    echo $variable;

     ?>
   </div>

   <div style="margin-top:950px;">
     <?php include '../footer.php'; ?>
  </div>
  </body>


</html>
