<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>



<!doctype html>
<html lang="tr-TR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title></title>
  <?php include '../header.php'; ?>
    </head>

  <body>

    <div style="margin-top:20px;">
    Select Level: <a href="xss.php">1</a> | <a href="xss2.php">2</a> | <a href="xss3.php">3</a>
    <div>
    <form method="post" style="margin-left:770px; margin-right:600px; margin-top:200px;">
      <p>
          <label for="firstName">First Name:</label>
          <input type="text" name="first_name" id="firstName">
      </p>
      <p>
          <label for="lastName">Last Name:</label>
          <input type="text" name="last_name" id="lastName">
      </p>
      <p>
          <label for="emailAddress">Email Address:</label>
          <input type="text" name="email" id="emailAddress">
      </p>
      <input type="submit" value="Save Data!"><br />
      <input type="submit" name="deleteItem" value="Clear All Data!!" />
  </form>

  <div style="border: 5px solid red; margin-left:300px; margin-right:300px; margin-top:50px;">
    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "herpestes", "112263ABC", "herpestes");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Escape user inputs for security
  $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
  $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);

  // Attempt insert query execution
  $sql = "INSERT INTO xss (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
  if(mysqli_query($link, $sql)){
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  if($link === false){
    die("Error: Could not connect." . mysqli_connect_error());
  }
  $query = mysqli_query($link, "SELECT * FROM xss");
  if($query){
      while($records=mysqli_fetch_assoc($query)){

        echo "İsim: " . $records["first_name"] . "<br />";
        echo "Soyİsim: " . $records["last_name"] . "<br />";
        echo "Email: " . $records["email"] . "<br />";

    }
}
    if(isset($_POST['deleteItem'])){
      $delete = $_POST['deleteItem'];
      $sql = "DELETE from 'xss'";
    }

  // Close connection
  mysqli_close($link);



     ?>

   </div>

     <?php include '../footer.php'; ?>


  </body>
</html>
