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
              <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">Selamat Datang<br class="d-block d-lg-none d-xl-block" />Di Perpustakaan Digital</h1>
              <p class="mb-4 fs-1">Anda Bisa Melakukan Peminjaman Buku</p>
              <div class="pt-3"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-auto mb-5 mb-md-7">
              <h1 class="fw-semi-bold text-warning">Layanan <span class="text-1100">Kami</span></h1>
            </div>
          </div>
          <div class="row">
           
            <div class="col-sm-12 col-lg-12 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3">
                <img class="img-fluid mb-4" src="assets/public/assets/img/gallery/librarian.png" width="100" alt="..." />
                <h3 class="h5 mb-4 font-base">Peminjaman Buku</h3>
                <p class="lh-lg">Peminjaman Buku Dapat Dilakukan Oleh Pengguna Terdaftar</p>
              </div>
            </div>
           
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section id="libraries">
        <div class="bg-holder" style="background-image: url('assets/public/assets/img/illustrations/libraries-bg.png'); background-position: left bottom; background-size: contain;"></div>

        <!--/.bg-holder-->

        <div class="container">
          <div class="row g-xl-0 align-items-center">
            <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/public/assets/img/illustrations/our-libraries.png" width="620" alt="" /></div>
            <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
              <h1 class="fw-semi-bold text-warning">Perpustakaan Digital <span class="text-1100">Kami</span></h1>
              <p class="pt-3 lh-lg">
               Pengguna Bisa Menggunakan Peminjaman Buku
              </p>
              <div class="py-3">
                <a href="login.php" class="btn btn-lg btn-primary rounded-pill font-base" type="submit">Lebih Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-8" id="books">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center mb-7">
              <h1 class="fw-semi-bold text-warning">Buku<span class="text-1100"> Kami</span></h1>
            </div>
           
           <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="text-center">Buku Perpustakaan Digital Kami</h4>
                </div>
                <div class="card-body text-center">
                    <div class="container">
                    <div class="row">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM buku");
                    while($row = mysqli_fetch_array($query)) {?>
                    <div class="card" style="width: 18rem; margin:5px;">
  <img src="assets/img/book.jpg" class="card-img-top" alt="Buku">
  <div class="card-body">
    <h5 class="card-title"><?= $row['Judul'] ?></h5>
    <p class="card-text">Nama Penulis : <?= $row['Penulis'] ?></p>
    <p class="card-text">Nama Penerbit : <?= $row['Penerbit'] ?></p>
    <p class="card-text">Tahun Terbit : <?= $row['TahunTerbit'] ?></p>
    <a href="login.php" class="btn btn-primary">Pinjam</a>
  </div>
</div>

                    <?php
                    }
                    ?>
                   
                </div>
                </div>
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

      <section class="py-6">
        <div class="bg-holder" style="background-image: url('assets/public/assets/img/illustrations/cta-bg.png'); background-position: right bottom; background-size: contain;"></div>

        <!--/.bg-holder-->

        
      </section>
      <section class="py-0">
       <div class="bg-holder" style="background-image: url('assets/public/assets/img/illustrations/footer-bg.png'); background-position: center; background-size: cover;"></div>

        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-between pb-5 pt-8">
            <div class="col-12 col-lg-auto mb-5 mb-lg-0">
              <a class="d-flex align-items-center fw-semi-bold fs-3" href="#">
                <img class="me-3" src="assets/public/assets/img/gallery/logo.png" alt="" />
                <div class="text-primary font-base">Perpustakaan Digital</div>
              </a>
            </div>
            <div class="col-lg-6 mb-3">
              <h6 class="mb-5 font-base fs-1">Layanan</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="login.php">Peminjaman Buku</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="login.php">Login</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="register.php">Register</a></li>
               
              </ul>
            </div>
            
          </div>
          
        </div>
      </section>
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
