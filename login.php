<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Pemilih</title>
<style>
body{font-family:Poppins,sans-serif;background:#eef2f5;display:flex;justify-content:center;align-items:center;height:100vh;}
form{background:white;padding:25px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.1);}
input,button{width:100%;padding:10px;margin:5px 0;border-radius:8px;border:1px solid #ccc;}
button{background:#28a745;color:white;border:none;}
</style>
</head>
<body>
<form method="POST">
  <h2>Login Pemilih</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
  <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</form>
</body>
</html>