<?php
session_start();
unset($_SESSION["email"]);
$_SESSION["alert"] = "Anda berhasil logout";
header("Location:login.php");
?>