<?php
include'protection.php';$driver="";if(isset($_SESSION["account_as"]))$driver=$_SESSION["account_as"];
if($driver=='driver')include 'bid.php';

?>