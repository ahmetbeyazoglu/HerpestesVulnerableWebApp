<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<!--Default xss-->
<!doctype html>
<html lang="tr-TR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <style>
        * {
          box-sizing: border-box;
        }

        .menu {
          float: left;
          width: 20%;
          text-align: center;
        }

        .menu a {
          background-color: #e5e5e5;
          padding: 8px;
          margin-top: 7px;
          display: block;
          width: 100%;
          color: black;
        }

        .main {
          float: left;
          width: 60%;
          padding: 0 20px;
        }

        .right {
          background-color: #e5e5e5;
          float: left;
          width: 20%;
          padding: 15px;
          margin-top: 7px;
          text-align: center;
        }

        @media only screen and (max-width: 620px) {
          /* For mobile phones: */
          .menu, .main, .right {
            width: 100%;
          }
        }
        </style>
        <title></title>
  <?php include '../header.php'; ?>
    </head>

  <body style="font-family:Verdana;color:black;">
    <div style="overflow:auto">
      <div class="main">
      <div style="float:right">
        <img src="img/Captainamerica.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
        <a href="#"><p>Captain America</p></a>
      </div>
        <img src="img/Dag2.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
        <a href="#"><p>Dag II</p></a>
          <div style="float:right">
        <img src="img/Hulk.jpeg" width="250" height="275" style="margin-left:20px; margin-top:10px">
        <a href="#"><p>Hulk</p></a>
      </div>
        <img src="img/Antman.jpeg" width="250" height="275" style="margin-left:20px;margin-top:10px">
        <a href="#"><p>Ant Man</p></a>

      </div>

      <div class="right">
        Select Level: <a href="xss.php">1</a> | <a href="xss2.php">2</a> | <a href="xss3.php">3</a><hr>
        <form method="post">
          <input  type="text" name="text1" placeholder="SearchArea">
          <input type="submit" name"submit1" value="Search">
        </form>
        <?php
        error_reporting(0);
        $variable = $_POST["text1"];
        echo "<h5>You searched this:</h5>";
        echo $variable;

         ?>
     </div>
      </div>
    </div>
<!--
<div style="overflow:auto">
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

   </div>-->


 <div style="margin-top:10%;">
   <?php include '../footer.php'; ?>
</div>
  </body>
</html>
