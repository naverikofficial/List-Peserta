<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Peserta</title>
</head>
<body>
<h2>Tambah Peserta Baru</h2>
<form method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Face Claim: <input type="text" name="face_claim" required><br>
    Devisi: <input type="text" name="devisi" required><br><br>
    <button type="submit" name="submit">Simpan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $face_claim = $_POST['face_claim'];
    $devisi = $_POST['devisi'];
    mysqli_query($conn, "INSERT INTO peserta (nama, face_claim, devisi) VALUES ('$nama', '$face_claim', '$devisi')");
    echo "<script>alert('Peserta ditambahkan!');window.location='index.php';</script>";
}
?>
</body>
</html>

