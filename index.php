<?php
session_start();
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Data Pasien</title>
    <style type="text/css">
        body{
            background: #f2e6ff;
        }
        .header{
            height: 50px;
			padding: 10px;
            text-align: center;
            font-size: 20px;
        }
        table{
            background: white;
            margin-left: 50px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
        <h1>Data Pasien</h1>
    </header>

    <div class="container">
    <p><a href="add.php" class="btn btn-outline-primary">+ Tambah data</a></p>
    <table border="2">
        <thead>
            <tr>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>   
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * FROM pasien") or die(mysqli_error($koneksi));
            foreach ($data as $baris){?>
            <tr>
                <td><?php echo $baris['id_pasien'] ?></td>
                <td><?php echo $baris['nama'] ?></td>
                <td><?php echo $baris['jenis_kelamin'] ?></td>
                <td><?php echo $baris['usia'] ?></td>
                <td><?php echo $baris['alamat'] ?></td>
                <td>
                    <a href="update.php?id_pasien=<?php echo $baris['id_pasien'] ?>" class="btn btn-success" >Update</a>
                    <a href="delete.php?id_pasien=<?php echo $baris['id_pasien'] ?>" class="btn btn-danger" >Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </div>
    </table>
    <p> </p>
    <p><a href="logout.php" class="btn btn-danger" >Logout</a></p> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>