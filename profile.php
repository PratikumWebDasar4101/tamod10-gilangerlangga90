<?php
   session_start();
   require_once("koneksi.php");
   $db = new Data;

   $nim = $_SESSION['nim'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TA9</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="newData.php">EDIT DATA </a>
      <a class="nav-item nav-link" href="dashboard.php">Lihat Dashboard</a>
      <a class="nav-item nav-link" href="hapus.php">Hapus Akun</a>
      <a class="nav-item nav-link" href="editpassword.php">Edit Password</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="container">
  <?php
    $sql = "SELECT * FROM akun JOIN mahasiswa USING (nim) WHERE nim=$nim";
    $result = $db->query($sql);
    $row = $db->fetchAll($result);
  ?>
<div class="card">
  <h5 class="card-header"> DATA PROFILE</h5>
  <div class="card-body pb-5">
    <p class="card-text"> <b> Nama </b></p>
    <h5 class="card-title"><?php echo $row['nama_depan'] . " " . $row['nama_belakang']; ?></h5>
    <p class="card-text"> <b> NIM </b></p>
    <h5 class="card-title"><?php echo $row['nim']; ?></h5>
     <p class="card-text"> <b> Kelas </b></p>
    <h5 class="card-title"><?php echo $row['kelas']; ?></h5>
     <p class="card-text"> <b> Hobi </b></p>
    <h5 class="card-title"><?php echo $row['hobi']; ?></h5>
     <p class="card-text"> <b> Genre Film </b></p>
    <h5 class="card-title"><?php echo $row['genre_film']; ?></h5>
     <p class="card-text"> <b> Tempat Wisata </b></p>
    <h5 class="card-title"><?php echo $row['tempat_wisata']; ?></h5>
     <p class="card-text"> <b> Tanggal Lahir </b></p>
    <h5 class="card-title"><?php echo $row['tanggal_lahir']; ?></h5>
     <p class="card-text"> <b> Email </b></p>
    <h5 class="card-title"><?php echo $row['email']; ?></h5>
  </div>
</div>
</div>
</body>

</html>