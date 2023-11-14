<?php
include "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_pemilihan");
$nis = $_POST['nis'];

if (isset($_POST['submit-1'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 1");
    $sql = mysqli_query($conn, "INSERT INTO hasil_pemilihan VALUES ($nis, 1, now())");
    $hapus = mysqli_query($conn, "DELETE FROM tb_antrian WHERE nis=$nis");
    $ubah_status = mysqli_query($conn, "UPDATE siswa SET status = 'Sudah Memilih' WHERE nis = $nis");
    echo "
    <script>
        alert('Vote Berhasil!');
        window.location.href='success.php';
    </script>
    ";
}
else if (isset($_POST['submit-2'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 2");
    $sql = mysqli_query($conn, "INSERT INTO hasil_pemilihan VALUES ($nis, 2, now())");
    $hapus = mysqli_query($conn, "DELETE FROM tb_antrian WHERE nis=$nis");
    $ubah_status = mysqli_query($conn, "UPDATE siswa SET status = 'Sudah Memilih' WHERE nis = $nis");
    echo "
    <script>
        alert('Vote Berhasil!');
        window.location.href='success.php';
    </script>
    ";
}
else if (isset($_POST['submit-3'])) {
    $tambah_sql = mysqli_query($conn, "UPDATE tb_pemilihan SET hasil_vote = hasil_vote + 1 WHERE no = 3");
    $sql = mysqli_query($conn, "INSERT INTO hasil_pemilihan VALUES ($nis, 3, now())");
    $hapus = mysqli_query($conn, "DELETE FROM tb_antrian WHERE nis=$nis");
    $ubah_status = mysqli_query($conn, "UPDATE siswa SET status = 'Sudah Memilih' WHERE nis = $nis");
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

