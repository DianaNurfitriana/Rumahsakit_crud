<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <style>
        body{
            background: #ffe6e6;
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
    <h1>Tambah Data</h1>
        <div class="col-md-6">
        <form class="" action="prosesadd.php" method="post">
            <pre>
            <label for="id_pasien"></label>
            ID Pasien         <input type="text" class="form-control" name="id_pasien">
            <label for="nama"></label>
            Nama               <input type="text" class="form-control" name="nama">
            <label for="jenis_kelamin"></label>
            Jenis Kelamin   <input type="text" class="form-control" name="jenis_kelamin">
            <label for="usia"></label>
            Usia                  <input type="number" class="form-control" name="usia">
            <label for="alamat"></label>
            Alamat                <textarea type="text" class="form-control" name="alamat"></textarea><br/>
            <button class="btn btn-primary" type="submit" name="button">Simpan Data</button>
            </pre>
        </form>
        </div>
        <p><a href="index.php">=> Tabel Data Pasien</a></p>
    </div>
</body>
</html>