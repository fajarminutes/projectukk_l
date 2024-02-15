<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'digitallibrary');


if (isset($_POST['login'])) {
    // Ambil data dari form
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ambil hashed password dari database berdasarkan username
    $query = "SELECT UserID, Username, Password FROM user WHERE Username = ?";
    $stmt = $conn->prepare($query);

    // Periksa apakah prepare query berhasil
    if ($stmt === false) {
        die('Query preparation failed: ' . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Periksa apakah eksekusi query berhasil
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($UserID, $Username, $hashedPassword);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashedPassword)) {
            // Jika password valid, set session dan redirect ke halaman dashboard
            $_SESSION['UserID'] = $UserID;
            $_SESSION['Username'] = $Username;
            $stmt->close();
            $conn->close();
            header('Location: dashboard.php');
            exit();
        } else {
            // Jika login gagal, tampilkan pesan kesalahan
            echo "Login failed. Invalid username or password.";
        }
    } else {
        // Jika username tidak ditemukan, tampilkan pesan kesalahan
        echo "Login failed. Invalid username or password.";
    }

    // Tutup koneksi ke database
    $stmt->close();
    $conn->close();
}



if( isset ($_SESSION[ "userweb"])){
  header("Location: dashboard.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Login</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-text demo text-body fw-bolder">RAYLIBRARY</span>
              </a>
            </div>
            <!-- /Logo -->
            <form method="POST" action="">
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" name="Username" placeholder="username" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="Password" placeholder="Password" aria-describedby="password" />
                  
                </div>
              </div>
              <div class="mb-3">
              </div>
              
              
                <button class="btn btn-primary d-grid w-100" type="submit" name="login">Sign in</button>
                <div class="mb-3">
                <p>Belum punya akun? <a href="register.php">Register disini</a></p>
              </div>
              <a href="../index.html" class="btn-get-started scrollto">kembali</a>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  


