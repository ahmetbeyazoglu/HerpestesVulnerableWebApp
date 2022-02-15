<!--Default xss-->
<!doctype html>
<html lang="tr-TR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Code Execution Lab</title>
        <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

    </head>

  <body>
    <?php include '../header.php'; ?>
    <div class="container">
        <form method="post">
          <div class="row">
            <div class="col-75">
            <input type="text"  name="ip" placeholder="IP Area">
        <!--<input  type="text" name="ip" placeholder="IpArea">-->
        <input type="submit" name"runcode" value="Ping">
      </div>
    </div>

      </form>
   </div>

    <?php

      if( isset($_POST['ip']))
      {
        $code = $_POST["ip"];
        $output = shell_exec("ping -c 4 $code");
        echo "<pre>$output</pre>";

      }

    //echo $code
    /*$output = shell_exec('ping -c 4 $code');
    echo "<pre>$output</pre>";*/


    ?>

    <div style="margin-top:80%;">
      <?php include '../footer.php'; ?>
   </div>

  </body>
</html>
