<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
  header("location:../index.php?message=Anda harus login terlebih dahulu");
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("location:../index.php?message=Berhasil logout");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
</head>
<body>
  <div>
    <section>
      <h3>Halo <?php echo $_SESSION['fullname']; ?></h3>
      
      <p>Status pegawai: <?php echo $_SESSION['role']; ?></p>

      <br/>
      <div>
        <table border="1">
          <tr>
            <th>TANGGAL</th>
            <th>JAM MASUK</th>
            <th>JAM KELUAR</th>
            <th>PERFORMA</th>
          </tr>
          <!-- data absen -->
          <?php
            include("attendance.php")
          ?>
      </div>
      <br/>
      <form action="" method="POST">
        <button type="submit" name="absen">ABSEN SEKARANG</button>
      </form>
      <br/>

      <form action="" method="POST">
        <button name="logout" type="submit">logout</button>
      </form>
    </section>
  </div>
</body>
</html>