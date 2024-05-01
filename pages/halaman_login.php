<?php
    include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $nama = $_POST['nama'];
	    $umur = $_POST['umur'];
	    $tinggi_badan = $_POST['tinggi'];
	    $berat_badan = $_POST['berat'];

	    $sql = "INSERT INTO pasien (nama, umur, tinggi, berat) VALUES ('$nama', '$umur', '$tinggi_badan', '$berat_badan')";
	    $query = mysqli_query($koneksi, $sql);

	    if ($query) {
		    header("Location: form_konsultasi.php");
	    }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Daftar</h5>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input name="umur" type="text" class="form-control" id="umur" placeholder="Masukkan umur">
                        </div>
                        <div class="mb-3">
                            <label for="tinggi" class="form-label">Tinggi Badan</label>
                            <input name="tinggi" type="text" class="form-control" id="tinggi" placeholder="Masukkan tinggi badan">
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat Badan</label>
                            <input name="berat" type="text" class="form-control" id="berat" placeholder="Masukkan berat badan">
                        </div>
                        <a href="form_konsultasi.php"><button type="submit" class="btn btn-primary w-100">Daftar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
