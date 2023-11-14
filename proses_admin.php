<?php
include "koneksi.php";
   if (isset($_POST['cari'])) {
    $ting = $_POST['tingkat'];
    $tingkat = explode(" ",$ting);
    $angkatan=$tingkat[0];
    $jurusan=$tingkat[1];
    $kelas=$tingkat[2];
    $sql=mysqli_query($conn, "SELECT * FROM siswa WHERE tingkat='$angkatan' and jurusan='$jurusan' and  kelas='$kelas' ORDER BY nis ASC");
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
           <a href="proses_admin.php?id=<?=$row['nis'];?>"><button type="submit" name="antri" id=<?= $row['NIS']?>><h6><?= $aksi;?></h6></button></a>
        </td>
        </tr>
        <?php endforeach;?>
    </table>
    <?php }?>