<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_pemilihan");

if (isset($_POST['submit-1'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 1");
    echo "
    <script>
        alert('Vote Berhasil!');
        window.location.href='success.php';
    </script>
    ";
}
else if (isset($_POST['submit-2'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 2");
    echo "
    <script>
        alert('Vote Berhasil!');
        window.location.href='success.php';
    </script>
    ";
}
else if (isset($_POST['submit-3'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 3");
    echo "
    <script>
        alert('Vote Berhasil!');
        window.location.href='success.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Vote Gagal!');  
        window.location.href='pilih.php';
    </script>
    ";
}
?>

