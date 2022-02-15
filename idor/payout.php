
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
