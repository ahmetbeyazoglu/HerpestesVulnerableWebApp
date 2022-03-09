<!--Default csrf-->
<!doctype html>
<html lang="tr-TR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>CSRF Lab</title>
  <?php include '../header.php'; ?>
    </head>

  <body>
    <div style="margin-left:40%; margin-top:10%" >
      <h3>Change The Password !!</h3>
    <form action="#" method="GET">
       New password:<br />
         <input type="password" AUTOCOMPLETE="off" name="password_new"><br />
       Confirm new password:<br />
         <input type="password" AUTOCOMPLETE="off" name="password_conf"><br />
       <br />
         <input type="submit" value="Change" name="Change">
    </form>
    <?php
    if(isset($_REQUEST['Change'])) {
      echo "Password Changed";
    }

     ?>
  </div>



 <div style="margin-top:950px;">
   <?php include '../footer.php'; ?>
</div>
  </body>
</html>
