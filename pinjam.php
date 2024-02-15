<?php 
include 'layouts/header.php';
include 'layouts/navbar.php';
?>
   

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="text-center">Selamat Datang Di Perpustakaan Digital</h4>
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
</body>
</html>