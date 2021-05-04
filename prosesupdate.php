<?php
include 'koneksi.php';
$id_lama=$_GET['id_pasien'];
$id_pasien=$_POST['id_pasien'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$usia=$_POST['usia'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi, "UPDATE `pasien` SET id_pasien='$id_pasien', nama='$nama', jenis_kelamin='$jenis_kelamin', 
usia='$usia', alamat='$alamat' WHERE id_pasien='$id_lama' ") or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
}else{
    echo "Gagal";
}

?>