<?php
  session_start();

  if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:dashboard/index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="./styles/style.css"/> -->
    <title>Absensi</title>
  </head>

  <body>
    <div class="container">
      <div  class="wrapper">
        <!-- notifikasi -->
        <?php
        if (isset($_GET['message'])) {
          $msg = $_GET['message'];
          echo "<div class='notif-login'>$msg</div>";
        }
        ?>

        <h3 class="title">LOGIN</h3>

        <form action="login.php" method="POST" class="form-login">
          <label>masukan nomor induk</label>

          <input placeholder="nip" name="nip" type="number" class="input-login" required/>

          <label>masukan password</label>

          <input placeholder="******" name="password" type="password" class="input-login" required/>

          <button type="submit" class="button-login" name="login">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>