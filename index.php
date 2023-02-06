<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


  <link rel="stylesheet" href="logstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <title>Log In</title>
</head>

<body>
  <div class="login-wrapper">
    <div class="login-image">
      <img src="background.jpg" class="background" alt="Login Background">
      <span>SMA Katolik 1 Kabanjahe</span>
    </div>
    <div class="login-body">
      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
          echo "<div class='container'>";
          echo "<div class='alert alert-danger'>Login gagal ! username atau password salah !!</div>";
          echo "</div>";
        } elseif ($_GET['pesan'] == "logout") {
          echo "<div class='container'>";
          echo "<div class='alert alert-success'>Anda Telah Berhasil Logout</div>";
          echo "</div>";
        } elseif ($_GET['pesan'] == "belum_login") {
          echo "<div class='container'>";
          echo "<div class='alert alert-danger'>Anda Harus login untuk mengakses halaman admin !!</div>";
          echo "</div>";
        }
      }

      ?>
      <div class="form-area">
        <h3>Log In</h3>
        <form action="cek_login.php" method="POST">
          <div class="flex-input">
            <i class="fas fa-user" title="Username"></i>
            <input type="text" name="username" placeholder="Masukkan Username..." autocomplete="off" autofocus required>
          </div>
          <div class="flex-input">
            <i class="fas fa-lock" title="Password"></i>
            <input type="password" name="password" placeholder="Masukkan Password..." autocomplete="off" required>
          </div>
          <div class="log-button">
            <input type="submit" value="Log In" id="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>