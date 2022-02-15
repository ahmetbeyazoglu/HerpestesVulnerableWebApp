<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
  session_start();

  ?>

    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
        <form>
            <input type="submit" name="deleteItem" />
        </from>
        <?php
        require('db.php');
        $a = session_id();
        echo $a;
        echo "<br>";
        //session_start();
        session_regenerate_id();
        if(isset($_POST['deleteItem'])){
          $delete = $_POST['deleteItem'];
          $sql = "DELETE FROM idor WHERE id=" . $a;
        }


        //session_destroy();

      //  if(empty($a)) session_start();
        //echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
        ?>
        </div>








      <!--<input type="submit" name="deleteItem" value="ashmet" />-->






</body>
</html>
