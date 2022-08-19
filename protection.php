<?php
 session_start();
 echo $_SESSION["loggedin"];
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    //auth or send to login page
}?>