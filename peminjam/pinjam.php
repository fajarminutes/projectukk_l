 <?php 
 include '../layouts/header_peminjam.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Buku</li>
                        </ol>
                        
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Buku
                            </div>
                            <div class="card-body">
                               <div class="container">
                    <div class="row">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM buku");
                    while($row = mysqli_fetch_array($query)) {?>
                    <div class="card" style="width: 18rem; margin:5px;">
  <img src="../assets/img/book.jpg" class="card-img-top" alt="Buku">
  <div class="card-body">
    <h5 class="card-title"><?= $row['Judul'] ?></h5>
    <p class="card-text">Nama Penulis : <?= $row['Penulis'] ?></p>
    <p class="card-text">Nama Penerbit : <?= $row['Penerbit'] ?></p>
    <p class="card-text">Tahun Terbit : <?= $row['TahunTerbit'] ?></p>
    <a href="hal_pinjam.php?Number=<?= $row['BukuID'] ?>" class="btn btn-primary">Pinjam</a>
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
                </main>

               <?php 
               include '../layouts/footer.php';
               ?>
