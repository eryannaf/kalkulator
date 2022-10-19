<?php

$ttl = $_POST['tanggal'].'-'.$_POST['bulan'].'-'.$_POST['tahun'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Terima kasih sudah mendaftar, <?= $_POST['name'] ?></h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td><?= $_POST['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><?= $_POST['birth_place']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?= $ttl; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $_POST['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= $_POST['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td><?= $_POST['asal_sekolah']; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UAN</td>
                            <td><?= $_POST['nilai_uan']; ?></td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td><?= $_POST['usia']; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $_POST['status']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <form method="POST" action="">
                    Usia :<input type="text" name="usia">
                    <input type="submit" value="check">
                </form>
                <?php
                $usia=$_POST['usia'];
                echo 
                <a href="./../formfix.php" class="btn btn-info">Balik</a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>