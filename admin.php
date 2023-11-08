<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "koneksi2.php";
    $sql=mysqli_query($conn, "SELECT * FROM data_siswa");
    ?>
    <table border="1px" collspacing="0" collpadding="15px" width="70%">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($sql as $row) : ?>
        <tr align="center">
                    <td><?= $row["NIS"];?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["kelas"];?></td>
                    <td>
                        <a href="#"><?= $row["aksi"]?></a></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>