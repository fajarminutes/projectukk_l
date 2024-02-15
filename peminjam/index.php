 <?php 
 include '../layouts/header_peminjam.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';

  ?>
  <?php 
 $query_ulasan = mysqli_query($koneksi, "SELECT * FROM ulasanbuku WHERE UserID = $id_user");
 $query_peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");
 $ulasan  = mysqli_num_rows($query_ulasan);
 $peminjaman  = mysqli_num_rows($query_peminjaman);
?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Beranda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data Ulasan Buku <?= $ulasan ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="komentar.php">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Peminjaman Buku <?= $peminjaman ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="peminjaman.php">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                           

                        </div>
                       
                       
                    </div>
                </main>
               <?php 
               include '../layouts/footer.php';
               ?>