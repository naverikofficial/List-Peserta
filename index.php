<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$user_id"));

if ($user['has_voted'] == 1) {
  echo "<h2>Terima kasih, kamu sudah memberikan suara!</h2>";
  echo "<a href='logout.php'>Logout</a>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Voting Kandidat</title>
<style>
body{font-family:Poppins,sans-serif;text-align:center;background:#f0f2f5;}
.card{display:inline-block;
margin:10px;background:pink;
border-radius:5px;padding:2px;box-shadow:0 2px 6px rgba(0,0,0,0.1);}
button{background:#007bff;color:white;border:none;padding:10px 20px;border-radius:8px;cursor:pointer;}
</style>
</head>
<body>

<h1>Selamat Datang, <?= $_SESSION['username'] ?>!</h1>
<h2>Pilih Kandidat:</h2>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>
<div class="card">
  <img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>KAMELIA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="B">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
  <h3>Kandidat C</h3>
  <img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="C">
    <button type="submit">Vote C</button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<div class="card">
<img src="gambar/karina.jpg" width="150" height="100" style="border-radius: 50%; object-fit: cover;">
  <h3>HILMA</h3>
  <form action="vote.php" method="POST">
    <input type="hidden" name="candidate" value="A">
    <button type="submit">Vote </button>
  </form>
</div>

<br><br>
<a href="dashboard.php">Rank</a>
<a href="logout.php">Logout</a>

</body>
</html>