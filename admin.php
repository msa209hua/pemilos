<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

h6 {color:orange;}
</style>
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
                        <form action="admin.php" method="POST">
                            <button type="submit" name="antri"><h6>Antri</h6></button>
                            <?php
                            if (isset($_POST['antri'])) {
                                
                            }
                            ?>
                        </form>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>