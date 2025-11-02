<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];
$candidate = $_POST['candidate'];

// Cek apakah sudah pernah vote
$check = mysqli_query($conn, "SELECT has_voted FROM users WHERE id=$user_id");
$status = mysqli_fetch_assoc($check);

if ($status['has_voted'] == 1) {
  echo "Kamu sudah memilih!";
  exit;
}

// Simpan vote
mysqli_query($conn, "INSERT INTO votes (user_id, candidate) VALUES ($user_id, '$candidate')");
mysqli_query($conn, "UPDATE users SET has_voted=1 WHERE id=$user_id");

header("Location: index.php");
exit;
?>