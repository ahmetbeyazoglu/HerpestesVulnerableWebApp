<?php
    session_start();
    $a = session_id();
    //if(empty($a)) session_start();
    //echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
    // Destroy session
    session_destroy($a);
    header("Location: login.php");

    /*if(session_destroy($a)) {
        // Redirecting To Home Page
        header("Location: login.php");
    }*/
?>
