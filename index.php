<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<script src="bootstrap/js/bootstrap.js"></script>
<?php
include 'koneksi.php';
$jurusan = mysqli_query($conn, "SELECT * FROM tb_presentase_jurusan");

?>
    <form action="pilih.php" method="post">
        <h1>Pilih Nomor Bilik</h1>
        <select name="pilih_bilik">
            <?php foreach ($jurusan as $key) : ?>
            <option value="<?$key["jurusan"]?>"></option>
            <?php endforeach?>
            <option value=""></option>
        </select>
    </form>
</body>
</html>