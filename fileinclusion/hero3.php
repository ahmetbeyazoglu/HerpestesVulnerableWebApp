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
Thor
<div style="margin-top:10%;">
  <?php include '../footer.php'; ?>
</div>
