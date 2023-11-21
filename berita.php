<?php
include "koneksi.php";
$sqlJumlah= mysqli_query($conn, "SELECT SUM(hasil_vote) AS total_vote FROM tb_pemilihan");
$sqlSuara1= mysqli_query($conn, "SELECT hasil_vote FROM tb_pemilihan WHERE no='1'");
$sqlSuara2= mysqli_query($conn, "SELECT hasil_vote FROM tb_pemilihan WHERE no='2'");
$sqlSuara3= mysqli_query($conn, "SELECT hasil_vote FROM tb_pemilihan WHERE no='3'");
?>
<html>
<head>
<title></title>
</head>
<body>
<table width="100%">
<tr>
<td width="40" align="right"><img src="foto/smk.png" width="40%"></td>
<td width="20" align="center">
    <b>ORGANISASI SISWA INTRA SEKOLAH (OSIS)
    <br>SMK NEGERI 2 CIMAHI</b>
    <br><p>Jl.Kamarung Km. 1,5 No. 69 Kel. Citeureup Kec. Cimahi  Utara
    <br>Telp/Fax:(022) 87805857 Website : http://smkn2cmi.sch.id E-mail : smkn2cmi@yahoo.com 
    <br> Kota Cimahi - 40512</p><br></td>
<td width="40" align="left"><img src="foto/osis.png" width="60%"></td>
</tr>
</table>
<hr>
<p>Pada hari ini Rabu tanggal 22 bulan November tahun Dua Ribu Dua Puluh Tiga,</p>
    <table>
        <tr>
            <td>
                a.
            </td>
            <td>
                Telah Diselenggarakan Pemilihan Ketua Osis Angkatan 16 Tahun Pelajaran 2023/2024
            </td>
        </tr>
        <tr>
            <td></td>
            <td>pada</td>
        </tr>
        <tr>
            <td></td>
            <td>Pukul ..... sampai dengan Pukul .....</td>
        </tr>
        <tr>
            <td></td>
            <td>Lokasi</td>
            <td>: SMK Negeri 2 Cimahi</td>
        </tr>
        <tr>
            <td></td>
            <td>Jumlah Pemilihan Seharusnya</td>
            <td>: 1131 Siswa</td>
        </tr>
        <tr>
            <td></td>
            <td>Jumlah Pemilihan Hadir</td>
            <td>: <?php foreach ($sqlJumlah as $total) :?><?=$total["total_vote"]; ?><?php endforeach;?> Siswa</td>
        </tr>
        <tr>
            <td></td>
            <td>Jumlah Pemilihan Tidak Hadir</td>
            <td>: <?php foreach ($sqlJumlah as $total) :?><?= $total_hadir=1131-$total["total_vote"]; ?><?php endforeach;?> Siswa</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Hasil Pemilihan :</td>
        </tr>
        <tr>
            <td></td>
            <td>1.Suara Calon 1 (divisi nama calon)</td>
            <td>: <?php foreach ($sqlSuara1 as $total) :?><?=$total["hasil_vote"]; ?><?php endforeach;?> Suara</td>
        </tr>
        <tr>
            <td></td>
            <td>2.Suara Calon 2 (divisi nama calon)</td>
            <td>: <?php foreach ($sqlSuara2 as $total) :?><?=$total["hasil_vote"]; ?><?php endforeach;?> Suara</td>
        </tr>
        <tr>
            <td></td>
            <td>3.Suara Calon 3 (divisi nama calon)</td>
            <td>: <?php foreach ($sqlSuara3 as $total) :?><?=$total["hasil_vote"]; ?><?php endforeach;?> Suara</td>
        </tr>
        <tr>
            <td>c.</td>
            <td>Catatan Selama Pelaksanaan Pemilihan</td>
        </tr>
        <tr>
            <td></td>
            <td>(diskripsi)</td>
        </tr>
        <tr>
            <td></td>
            <td>Berita acara ini dibuat dengan sesungguhnya</td>
        </tr>
    </table>
    </p>
    <br>
    <table>
        <tr>
            <th align="left">Pembina OSIS</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th align="left">Ketua OSIS</th>
        </tr>
        <tr>
            <td><br><br><br><br><br></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th align="left">Pradina Diah Aryanti S.Pd <br> NIP. 19950123 20221 2 005</th>
            <th></th>
            <th align="left">Deva Naufal <br> NIS. 102105668</th>
        </tr>
    </table>
</body>
</html>