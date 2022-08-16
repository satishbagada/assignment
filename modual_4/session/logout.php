<?php
session_start();
unset($_SESSION["email_address"]);
session_destroy();

echo "<h1 align='center' style='color:green'>You are Logout  Successfully</h1>";
header('refresh:2,login.php');
