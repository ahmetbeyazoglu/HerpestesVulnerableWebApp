<?php
include 'db.php';

if(isset($_POST['gonder'])){
  $duzenle=$db->prepare("UPDATE idor SET
  username=:user,
  pass=:pass,
  hakkinda=:hakkinda

  where id={$_POST['id']}");
  $update=$duzenle->execute(array(
    'user' => $_POST['user'],
    'pass' => $_POST['parola'],
    'hakkinda' => $_POST['hakkinda']
  ));
if ($update){
  Header("Location:profil.php?islem=basarili");
}else{
  Header("Location:profil.php?islem=basarisiz");
}
}





 ?>
