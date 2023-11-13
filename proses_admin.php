<?php
    include 'koneksi2.php';
    $id=$_GET['id'];
    $tanSql=mysqli_query($conn, "UPDATE data_siswa SET bilik='$id' WHERE NIS=$id");
    $tanHapus= mysqli_query($conn, $tanSql);
    if ($tanHapus) {
        header('Location:admin.php');
    }
    else {
        header('Location:admin.php');
    }
    ?>