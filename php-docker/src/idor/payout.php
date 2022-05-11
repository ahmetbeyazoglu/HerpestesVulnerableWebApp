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
$ticketPrice= 30;
if(isset($_POST['submit'])){
  $price = $_POST["ticket"];
  $totalBill = $price*$ticketPrice;
  if($name != ''){
    header("Location:index.php");
  }


}
  echo $totalBill;

?>
