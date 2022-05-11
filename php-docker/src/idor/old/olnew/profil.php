<?php
@ob_start();
@session_start();
include 'db.php';
@$user = @$_SESSION["user"];
$sql = "SELECT * FROM idor where username='$user'";
$sorgu = $db->query($sql);
$row =  $sorgu->rowCount();

if ($row == 0){
  header("Location: login.php");
  exit;
}
$sorgu = $db->prepare("SELECT * FROM idor where username=:user");
$sorgu->execute(array(
  'user' => $user
));
$vericek = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html >
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
  <title>Profil</title>
</head>
<body>
  <h3 style="text-align: center;">Kullanıcı Profili</h3>
  <h4><?php echo @$_SESSION["user"]; ?></h4>
  <a href="cikis.php">Çıkış yap</a>
  <div style="text-align:center;">
    <form action="profilguncelle.php" method="post">
      <label for=""> Kullanıcı adı</label>
      <input name="user" value="<?php echo $vericek["username";] ?>" type="text">
      <label for="">Parola</label>
      <input name="parola" value="<?php $vericek["pass"]; ?>" type="text">
      <label for=""> Hakkımda</label>
      <textarea name="hakkimda" id="" cols="40" rows="2"><?php echo $vericek["hakkimda"];?></textarea>

      <button type="submit" name="gonder">Gönder</button>
      <input type="hidden" name="id" value="<?php echo $vericek['id'];?>">
    </form>
  </div>

  <div>
    <?php
    if (@$_GET["islem"] == "basarili"){
      echo '<div style="color:green">BASARILI</div>';
    }else if(@$_GET["islem"] == "basarisiz"){
      echo '<div style="color:red">BASARISIZ</div>';
    }
     ?>
</div>





</body>
