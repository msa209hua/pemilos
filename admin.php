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
    $sql=mysqli_query($conn, "SELECT * FROM siswa");
    ?>
    <table>
    <tr>
          <td width="7%">
          <form action="admin.php" method="POST">
            <select name="tingkat">
              <option value="10 PPLG A">10 PPLG A</option>
              <option value="10 PPLG B">10 PPLG B</option>
              <option value="10 KIMIA A">10 KIMIA A</option>
              <option value="10 KIMIA B">10 KIMIA B</option>
              <option value="10 KIMIA C">10 KIMIA C</option>
              <option value="10 ANIMASI A">10 ANIMASI A</option>
              <option value="10 ANIMASI B">10 ANIMASI B</option>
              <option value="10 DKV A">10 DKV A</option>
              <option value="10 DKV B">10 DKV B</option>
              <option value="10 DKV C">10 DKV C</option>
              <option value="10 MEKATRONIKA A">10 MEKATRONIKA A</option>
              <option value="10 MEKATRONIKA B">10 MEKATRONIKA B</option>
              <option value="10 MEKATRONIKA C">10 MEKATRONIKA C</option>
              <option value="10 MEKATRONIKA D">10 MEKATRONIKA D</option>
              <option value="10 PERMESINAN A">10 PERMESINAN A</option>
              <option value="10 PERMESINAN B">10 PERMESINAN B</option>
              <option value="11 PPLG A">11 PPLG A</option>
              <option value="11 PPLG B">11 PPLG B</option>
              <option value="11 KIMIA A">11 KIMIA A</option>
              <option value="11 KIMIA B">11 KIMIA B</option>
              <option value="11 KIMIA C">11 KIMIA C</option>
              <option value="11 ANIMASI A">11 ANIMASI A</option>
              <option value="11 ANIMASI B">11 ANIMASI B</option>
              <option value="11 DKV A">11 DKV A</option>
              <option value="11 DKV B">11 DKV B</option>
              <option value="11 DKV C">11 DKV C</option>
              <option value="11 MEKATRONIKA A">11 MEKATRONIKA A</option>
              <option value="11 MEKATRONIKA B">11 MEKATRONIKA B</option>
              <option value="11 MEKATRONIKA C">11 MEKATRONIKA C</option>
              <option value="11 MEKATRONIKA D">11 MEKATRONIKA D</option>
              <option value="11 PERMESINAN A">11 PERMESINAN A</option>
              <option value="11 PERMESINAN B">11 PERMESINAN B</option>
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
          <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tingkat</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Status</th>
        </tr>
        <?php foreach ($sql as $row) : ?>
        <tr align="center">
          <td>1</td>
                    <td><?= $row["nis"];?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["tingkat"];?></td>
                    <td><?= $row["jurusan"];?></td>
                    <td><?= $row["kelas"];?></td>
                    <td>
                        <a href="proses_admin.php?id=<?=$row['nis'];?>"><button type="submit" name="antri" id=<?= $row['NIS']?>><h6><?= $aksi;?></h6></button></a>
                    </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>