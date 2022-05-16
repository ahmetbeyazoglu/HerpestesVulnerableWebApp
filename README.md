# HerpestesVulnerableWebApp

Herpestes Vulnerable Web Application is a graduation project. You can use this project to improve your web vulnerable skills. While improving this lab I used PHP, docker, and MySQL. Very easy to use with docker-compose. In the down, I will tell you how can you install and use it.<br><hr>
First of all, you have to install docker and docker-compose I won't tell you how to do this it's not the subject.
<pre>
git clone https://github.com/herpestes0/HerpestesVulnerableWebApp.git
cd HerpestesVulnerableWebApp/php-docker
sudo docker-compose up –build
</pre>
<br>
After installation we should configure our projet database. İf we build Project we can connect 127.0.0.1:9001 and we will see phpmyadmin login page.	<br>

![image](https://github.com/herpestes0/HerpestesVulnerableWebApp/blob/main/img/db_login.png?raw=true)
<br>

Fill like this. Password: 112263ABC. After the login, we look in the Project file and the herpestes.sql file is here. We need two steps:<br>
1-	We create a empty database and name ‘herpestes’
<br>
![image](https://github.com/herpestes0/HerpestesVulnerableWebApp/blob/main/img/db_import.png?raw=true)
<br>
2-	As we can see create a new database and name is herpestes. Second part is we are importing in project file.<br>
And its database is done.<br>
Completed the lab setup if we connected the 127.0.0.1:9000 we should see login page.<br><hr>
<a href="https://github.com/herpestes0/herpestes0.github.io/tree/main/writeup">Labs writeup is here.</a>
