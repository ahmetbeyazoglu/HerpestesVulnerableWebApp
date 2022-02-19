<!DOCTYPE html>
<html>
<head>
  <title>Herpestes Security  Carrer</title>
  <?php include '../header.php'; ?>

</head>

<body>
  <div style="margin-left:25%; margin-top:10%">
    <h1>Herpestes Security we are building your carrer</h1>
  </div>

<hr>
  <div style="margin-left:40%; margin-top:5%;">
    <p>Upload your CV</p>
    <p>We will contact you in soon.</p>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>

  </form>
</div>



</body>
<div style="margin-top:22%;">
  <?php include '../footer.php'; ?>
</div>
</html>
