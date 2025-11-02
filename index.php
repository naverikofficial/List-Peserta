<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Peserta</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #156a9bff; text-align: center; }
        th { background-color: #db9292ff; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 5px; }
        .btn-add { background: #28a745; color: white; }
        .btn-del { background: #dc3545; color: white; }
    </style>
</head>
<body>

<h2>📋 Dashboard Daftar Peserta</h2>
<a href="tambah.php" class="btn btn-add">+ Tambah Peserta</a>
<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Face Cliam</th>
        <th>Devisi</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $result = mysqli_query($conn, "SELECT * FROM peserta");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['face_claim']}</td>
                <td>{$row['devisi']}</td>
                <td><a href='hapus.php?id={$row['id']}' class='btn btn-del'>Hapus</a></td>
              </tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
