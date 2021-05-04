<?php
include 'koneksi.php';

$id_pasien=$_POST['id_pasien'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$usia=$_POST['usia'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi, "INSERT INTO pasien (id_pasien, nama, jenis_kelamin, usia, alamat) VALUES
('$id_pasien', '$nama', '$jenis_kelamin', '$usia', '$alamat') ") or die(mysqli_error($koneksi));

if($query){
    header("Location: add.php");
}else{
    echo "Gagal Input Data";
}

?>