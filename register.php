<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
  if (mysqli_num_rows($check) > 0) {
    $error = "Username sudah terdaftar!";
  } else {
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username','$password')");
    header("Location: login.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Akun Pemilih</title>
<style>
body { font-family: Poppins, sans-serif; background: #f5f8fc; display: flex; justify-content:center; align-items:center; height:100vh;}
form { background:white; padding:25px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1);}
input,button{width:100%;padding:10px;margin:5px 0;border-radius:8px;border:1px solid #ccc;}
button{background:#007bff;color:white;border:none;}
</style>
</head>
<body>
<form method="POST">
  <h2>Daftar Pemilih</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Daftar</button>
  <p>Sudah punya akun? <a href="login.php">Login</a></p>
</form>
</body>
</html>