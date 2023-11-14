<?php
include "koneksi.php";

$nis = $_GET['nis'];
$kelas = $_GET['kelas'];
$status = $_GET['status'];


if($status == 'Antri'){
    $antrian = mysqli_query($conn, "SELECT * FROM tb_antrian ORDER BY bilik DESC");
    $total_antrian = mysqli_num_rows($antrian);

    if($total_antrian<3){
        if($total_antrian==0){
            $bilik = 1;
        } else {
            $tot = 0;
            foreach($antrian as $data){
                $tot = $tot + $data['bilik'];
            }

            $bilik = 1;
            if($tot == 0){
                $bilik = 1;
            }else if($tot == 1){
                $bilik = 2;
            }else if($tot == 3){
                $bilik = 3;
            }else if($tot == 4){
                $bilik = 2;
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