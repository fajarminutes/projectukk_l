 <?php 
 include '../layouts/header_petugas.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';

  $query = mysqli_query($koneksi, "SELECT * FROM buku");
 $query_ulasan = mysqli_query($koneksi, "SELECT * FROM ulasanbuku");
 $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
 $query_peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");
 $query_user = mysqli_query($koneksi, "SELECT * FROM user WHERE Level = 3");
 $query_petugas = mysqli_query($koneksi, "SELECT * FROM user WHERE Level = 2");
 $buku  = mysqli_num_rows($query);
 $ulasan  = mysqli_num_rows($query_ulasan);
 $kategori  = mysqli_num_rows($query_kategori);
 $peminjaman  = mysqli_num_rows($query_peminjaman);
 $petugas  = mysqli_num_rows($query_petugas);
 $users  = mysqli_num_rows($query_user);

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
                                    <div class="card-body">Data Buku <?= $buku ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="buku.php">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Data Ulasan Buku <?= $ulasan ?></div>
                                    
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
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Data Kategori Buku <?= $kategori ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kategori.php">Lihat</a>
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