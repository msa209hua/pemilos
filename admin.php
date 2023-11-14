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
    include "koneksi.php";
    $aksi="Antri";
    $sql=mysqli_query($conn, "SELECT * FROM data_siswa");
    ?>
    <table>
    <tr>
          <td width="7%">
          <form action="admin.php" method="POST">
            <select name="tingkat">
              <option value="X">X</option>
              <option value="XI">XI</option>
            </select>
          </td>
          <td width="10%">
            <select name="jurusan">
              <option value="RPL">RPL</option>
              <option value="KIMIA INDUSTRI">KIMIA INDUSTRI</option>
              <option value="DKV">DKV</option>
              <option value="MEKATRONIKA">MEKATRONIKA</option>
              <option value="ANIMASI">ANIMASI</option>
              <option value="TEKNIK MESIN">TEKNIK MESIN</option>
            </select>
          </td>
          <td width="5%">
            <select name="kelas">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
            </select>
            </td>
            <td>
              <input type="submit" name="cari" value="Cari">
            </td>
          </form>
        </tr>
    </table>
    <table border="1px" collspacing="0" collpadding="15px" width="70%">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tingkat</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Status</th>
        </tr>
        <?php foreach ($sql as $row) : ?>
        <tr align="center">
                    <td><?= $row["NIS"];?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["tingkat"];?></td>
                    <td><?= $row["jurusan"];?></td>
                    <td><?= $row["kelas"];?></td>
                    <td>
                        <a href="proses_admin.php?id=<?=$row['NIS'];?>"><button type="submit" name="antri" id=<?= $row['NIS']?>><h6><?= $aksi;?></h6></button></a>
                    </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>