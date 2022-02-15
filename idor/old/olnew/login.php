<?php
@ob_start();
@session_start();
require 'db.php';

@$user = @$_SESSION["user"];
@sql = "SELECT * FROM idor where username = '$user'";
$sorgu = $db->query($sql);
$row = $sorgu->rowCount();

if($row==1){
  header("Location:profil.php");
  exit;
}
 ?>
 <!DOCTYPE html >
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
 </head>
 <body>
   <h3 style="text-align: center;">Kullanıcı girişi</h3>
<div style="text-align:center;">
  <form action="login.php" method="post">
    <label for=""> Kullancı Adı: </label>
    <input type="text" name="user">
    <label for="">Parola</label>
    <input type="text" name="parola">

    <button type="submit" name="giris"> Giriş yap</button>
  </form>
</div>
<?php
if (isset($_POST["giris"])){
  $user = $_POST["user"];
  $pass = $_POST["parola"];
  $sql = "SELECT * FROM idor where username= '$user' and pass='$pass'";
  $sorgu =  $db->query($sql);
  $kontrol = $sorgu->rowCount();
  if($kontrol == 1){
    $_SESSION["user"] = $user;
    header("Location: profil.php");
    exit;
  }else{
    echo 'div class="alert alert-danger mt-2">HATALI BİLGİLER</div>';
    exit;
  }
}

 ?>
 </body>
