<?php
include 'db.php';
$resultA = mysqli_query($conn, "SELECT COUNT(*) AS total FROM votes WHERE candidate='A'");
$resultB = mysqli_query($conn, "SELECT COUNT(*) AS total FROM votes WHERE candidate='B'");
$resultC = mysqli_query($conn, "SELECT COUNT(*) AS total FROM votes WHERE candidate='C'");
$a = mysqli_fetch_assoc($resultA)['total'];
$b = mysqli_fetch_assoc($resultB)['total'];
$c = mysqli_fetch_assoc($resultC)['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Hasil Voting</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
body{text-align:center;background:#f7f9fc;font-family:Poppins,sans-serif;}
.chart-container{width:60%;margin:30px auto;background:white;padding:20px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.1);}
</style>
</head>
<body>
<h1>Hasil Voting Sementara</h1>
<div class="chart-container">
  <canvas id="voteChart"></canvas>
</div>
<a href="index.php">Kembali</a>
<script>
const ctx = document.getElementById('voteChart');
new Chart(ctx,{
  type:'bar',
  data:{
    labels:['Kandidat A','Kandidat B','Kandidat C'],
    datasets:[{
      label:'Jumlah Suara',
      data:[<?= $a ?>,<?= $b ?>,<?= $c ?>],
      backgroundColor:['#36a2eb','#ff6384','#ffcd56']
    }]
  },
  options:{scales:{y:{beginAtZero:true}}}
});
</script>
</body>
</html>