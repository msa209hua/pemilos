<?php
$host="localhost";
$user="root";
$pass="";
$database="db_pemilos";
$database1="db_data_siswa";
$conn = new mysqli($host, $user, $pass, $database, $database1);
if ($conn->connect_error) {
    echo "Gagal koneksi ke database";
} 
else {
    //koneksi berhasil
    //echo "berhasil";
}
?>