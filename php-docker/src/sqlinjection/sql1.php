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
        <title>SQL Injection</title>
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
            <p1>Search the Movie</p1>
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
      </div>
    </div>
      </form>



<div style="margin-left:300px; margin-top:10px;">
<?php
    if (isset($_POST['submit'])) {
        $searchValue = $_POST['search'];
        $con = new mysqli("mysql_db", "root", "112263ABC", "herpestes");
        if ($con->connect_error) {
            echo "connection Failed: " . $con->connect_error;
        } else {
            $sql = "SELECT * FROM sqlinjection WHERE movie_name LIKE '%$searchValue%'";

            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo $row['movie_name'] . " " . $row['director'] . "<br>";


            }


        }
    }
    ?>
</div>
<?php include '../footer.php'; ?>



  </body>
</html>
