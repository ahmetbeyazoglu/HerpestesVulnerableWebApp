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
        <title></title>
  <?php include '../header.php'; ?>
    </head>

  <body>
      <p>1 Bilet 30 ₺</p>
      <form method="post">
        <div class="row">
          <div class="col-75">
            <input type="text" placeholder="Order Ticket" name="ticket">
            <input type="hidden" name="cost" value="30">
          <button type="submit" name="submit">Order !</button>
          <?php
              //$ticketPrice= 30;
              error_reporting(0);
              $cost = $_POST["cost"];
              $price = $_POST["ticket"];
              $totalBill =  $price * $cost;
              echo "<hr>";
              echo "<br>";
              echo "Toplam Fatura: " . $totalBill;
           ?>
        </div>
      </div>
    </form>
    <?php
  /*
    if(isset($_POST['submit'])){
      $price2 = $_POST["ticket"];
      $totalBill = $price*$ticketPrice;
    }
    echo $totalBill;
*/
     ?>


 <div style="margin-top:950px;">
   <?php include '../footer.php'; ?>
</div>
  </body>
</html>
