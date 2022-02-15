<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.menu {
  float: left;
  width: 20%;
  text-align: center;
}

.menu a {
  background-color: #e5e5e5;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width: 100%;
  color: black;
}

.main {
  float: left;
  width: 60%;
  padding: 0 20px;
}

.right {
  background-color: #e5e5e5;
  float: left;
  width: 20%;
  padding: 15px;
  margin-top: 7px;
  text-align: center;
}

@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;color:black;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Herpestes Web Security Vulnerable Lab</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <a href="/website/xss/xss.php">Xss</a>
    <a href="/website/sqlinjection/sql1.php">Sql Injection</a>
    <a href="/website/codeexec/codeexec.php">Code Execution</a>
    <a href="/website/idor/index.php">Idor</a>
    <a href="#">---</a>
    <a href="#">---</a>
    <a href="#">---</a>
    <a href="#">---</a>

  </div>

  <div class="main">
    <h2>Web Application Security</h2>
    <p>This is my graduation project. I am a student of computer technology and information system at Mersin University.</p>
    <p>Vulnerable web application developed with PHP and MYSQL. You can improving yourself web security or you can use this lab for the education.</p>
    <p>A lot of web vulnerability in one lab you can improve your self in this lab</p>
    <img src="xss/img/Antman.jpeg" width="250" height="275">
  </div>

  <div class="right">
    <h2>About</h2>
    <p>I'm interested in cyber security. İmproving myself web application security.</p>
    <p>While developing this vulnerable website, my main goal was to understand how the vulnerability works and to improve myself in finding where the vulnerability lies in the code.  </p>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:18%;">Herpestes Security</div>

</body>
</html>
