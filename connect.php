<?php
$host="localhost";
$user="root";
$password="";
$db="rumahsakit_diana";

$koneksi=mysqli_connect($host,$user,$password,$db);

if(empty($_SESSION["email"])){
    $_SESSION["alert"] - "Anda harus login terlebih dahulu";
    header("Location:login.php");
}

?>