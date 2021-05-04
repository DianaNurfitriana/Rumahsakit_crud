<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <style>
        body{
            background: #e6fff2;
        }
        h1{
            padding-top: 15px;
            margin-left: 50px;
        }
        pre{
            font-size: 20px;
			font-family: garamond;
        }
    </style>

</head>
<body>
    <div class="container">
    <h1>Update Data</h1>
        <?php
        include 'koneksi.php';
        $id_pasien=$_GET['id_pasien'];
        $data=mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien' ") or die(mysqli_error($koneksi));
        $baris=mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
        <form action="prosesupdate.php?id_pasien=<?php echo $id_pasien ?>" method="post">
        <pre>
            ID Pasien     <label for="id_pasien"></label>
            <input type="text" class="form-control" name="id_pasien" value="<?php echo $baris['id_pasien'] ?>">
            Nama          <label for="nama"></label>
            <input type="text" class="form-control" name="nama" value="<?php echo $baris['nama'] ?>">
            Jenis Kelamin <label for="jenis_kelamin"></label>
            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $baris['jenis_kelamin'] ?>">
            Usia          <label for="usia"></label>
            <input type="number" class="form-control" name="usia" value="<?php echo $baris['usia'] ?>">
            Alamat        <label for="alamat"></label>
            <textarea type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat'] ?>"></textarea>
            <button class="btn btn-primary" type="submit" name="button">Simpan</button>
        </pre>
        </form>
        </div>
        <p><a href="index.php">=> Tabel Data Pasien</a></p>
    </div>
</body>
</html>