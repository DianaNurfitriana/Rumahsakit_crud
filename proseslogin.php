<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakit_diana");
$email = $_POST["email"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'")
or die(mysqli_error($koneksi));

if ($data = mysqli_fetch_array($query)){
    $_SESSION["email"] = $data["email"];
    $_SESSION["alert"] = 'Anda berhasil login';
    header("Location:index.php");
}else{
    $_SESSION["alert"] = "Email atau Password salah";
    header("Location:login.php");
}
?>