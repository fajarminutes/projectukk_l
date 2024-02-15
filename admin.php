<?php 
include 'layouts/koneksi.php';
?>

<!-- @format -->

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Perpustakaan Digital | Landing</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/public/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/public/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/public/assets/img/favicons/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/public/assets/img/favicons/favicon.ico" />
    <link rel="manifest" href="assets/public/assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileImage" content="assets/public/assets/img/favicons/mstile-150x150.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/public/assets/css/theme.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="#">
            <img class="me-3" src="assets/public/assets/img/gallery/logo.png" alt="" />
            <div class="text-primary font-base">Perpustakaan Digital</div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item"><a class="nav-link fw-medium active" aria-current="page" href="#">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#books">Buku</a></li>
              <li class="nav-item"><a class="nav-link" href="#libraries">Perpustakaan</a></li>
             
            </ul>
            <form class="ps-lg-5">
              <a href="login.php" class="btn btn-lg btn-primary rounded-pill bg-gradient font-base order-0" type="submit">Login</a>
              <a href="register.php" class="btn btn-lg btn-success rounded-pill bg-gradient font-base order-0" type="submit">Registeer</a>
            </form>
          </div>
        </div>
      </nav>
      <section class="py-0" id="home">
       <div class="bg-holder d-none d-md-block" style="background-image: url('assets/public/assets/img/illustrations/hero-section.png'); background-position: right bottom; background-size: contain;"></div>

        <!--/.bg-holder-->

       <div class="bg-holder d-block d-md-none" style="background-image: url('assets/public/assets/img/illustrations/hero-bg.png'); background-position: right top; background-size: contain;"></div>

        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center min-vh-md-75">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">Login<br class="d-block d-lg-none d-xl-block" />Di Perpustakaan Digital</h1>
              <p class="mb-4 fs-1">Anda Bisa Melakukan Login</p>
              <div class="pt-3"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
           <div class="row">
            <div class="col-xl-6 mx-auto"> <!-- Menambahkan mx-auto untuk membuatnya menjadi tengah -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Formulir Login Admin</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Login Admin</h1>
                        <div class="col-xl-12 mx-auto">
                            <form action="crud.php" method="post">
                               
                                    <?php 
                                    if(isset($_SESSION['error'])) {
                                        echo ' <div class="alert alert-danger" role="alert">';
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        echo ' </div>';
                                    } 
                                    ?>
                                   
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Masukkan Email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Password Anda">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" name="login_admin" type="submit">Login</button>
                                <a href="register.php" class="btn btn-success">Register</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/public/assets/vendors/@popperjs/popper.min.js"></script>
    <script src="assets/public/assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/public/assets/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/public/assets/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
  </body>
</html>


