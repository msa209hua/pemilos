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
    $sql=mysqli_query($conn, "SELECT * FROM db_data_siswa");
    ?>
    <table border="1px" collspacing="0" collpadding="15px">
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
                        <?php echo "
                        <a href='Tanszah_pelangganEdit.php?id=$row[id_pelanggan]'>Edit</a>|"?>
                        <a href="Tanszah_pelangganHapus.php?id=<?=$row['id_pelanggan'];?>"onclick="return confirm ('Yakin mau hapus?');">Hapus</a></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>