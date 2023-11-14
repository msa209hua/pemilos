<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Tombol Antrian</title>
</head>
<body>

<?php
// Inisialisasi status awal
$status = isset($_POST['status']) ? $_POST['status'] : 'antri';

// Cek apakah tombol ditekan
if (isset($_POST['submit'])) {
    // Ubah status
    $status = ($status == 'antri') ? 'dalam antrian' : 'antri';
}
?>

<form method="post" action="">
    <input type="hidden" name="status" value="<?php echo $status; ?>">
    <input type="submit" name="submit" value="<?php echo $status; ?>">
</form>

</body>
</html>
