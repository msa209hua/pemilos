<?php
include "koneksi.php";

$nis = $_GET['nis'];
$kelas = $_GET['kelas'];
$status = $_GET['status'];


if($status == 'Antri'){
    $antrian = mysqli_query($conn, "SELECT * FROM tb_antrian ORDER BY bilik DESC");
    $total_antrian = mysqli_num_rows($antrian);

    if($total_antrian<5){
        if($total_antrian==0){
            $bilik = 1;
        }
         else {
            $arr_bilik=array();
            foreach($antrian as $k => $data){
                $arr_bilik[$data['bilik']]=$data['bilik'];
            }

            $bilik = 1;
            if (!isset($arr_bilik[1])) {
                $bilik=1;
            }elseif (!isset($arr_bilik[2])) {
                $bilik=2;
            }elseif (!isset($arr_bilik[3])) {
                $bilik=3;
            }elseif (!isset($arr_bilik[4])) {
                $bilik=4;
            }elseif (!isset($arr_bilik[5])) {
                $bilik=5;
            }
        }

        $sql = mysqli_query($conn, "INSERT INTO tb_antrian VALUES ($nis, $bilik)");

        header("Location: admin.php?tingkat=$kelas");
    } else{
        echo "<script>
                alert('Maksimal Antrian Hanya 3 Siswa');
                window.location.href='admin.php?tingkat=$kelas';   
            </script>";
    }

} else {
    $sql = mysqli_query($conn, "DELETE FROM tb_antrian WHERE nis=$nis");

    header("Location: admin.php?tingkat=$kelas");
}




?>