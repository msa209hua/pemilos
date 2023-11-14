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

    <!-- proses -->
    <?php
    
    ?>
    <table>
    <tr>
          <td width="7%">
          <form method="POST">
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
              <option value="10 PEMESINAN A">10 PEMESINAN A</option>
              <option value="10 PEMESINAN B">10 PEMESINAN B</option>
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
              <option value="11 PEMESINAN A">11 PEMESINAN A</option>
              <option value="11 PEMESINAN B">11 PEMESINAN B</option>
            </select>
            </td>
            <td>
              <input type="submit" name="cari" value="Cari">
            </td>
          </form>
        </tr>
    </table>
    <?php
    include "koneksi.php";
    if (isset($_POST['cari'])) {
      $ting = $_POST['tingkat'];
      $tingkat = explode(" ",$ting);
      $angkatan=$tingkat[0];
      $jurusan=$tingkat[1];
      $kelas=$tingkat[2];
      $sql=mysqli_query($conn, "SELECT * FROM siswa WHERE tingkat='$angkatan' and jurusan='$jurusan' and  kelas='$kelas' ORDER BY nis ASC");
      
    $aksi="Antri";
    ?>
    <table border="1px" collspacing="0" collpadding="15px" width="70%">
        <tr>
          <th>NO</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Status</th>
        </tr>
        <?php $no = 0;?>
        <?php foreach ($sql as $row) : ?>
        <tr align="center">
          <td><?php $no += 1; echo $no;?></td>
          <td><?= $row["nis"];?></td>
          <td><?= $row["nama"];?></td>
          <td><?= $row["tingkat"]." ".$row["jurusan"]." ".$row["kelas"];?></td>
         <td>
           <a href="proses_admin.php?id=<?=$row['nis'];?>"><button type="submit" name="antri" id=<?= $row['nis']?>><h6><?= $aksi;?></h6></button></a>
        </td>
        </tr>
        <?php endforeach;?>
    </table>
    <?php
    }
    ?>
</body>
</html>