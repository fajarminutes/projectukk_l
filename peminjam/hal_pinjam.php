 <?php 
 include '../layouts/header_peminjam.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 if(isset($_GET['Number'])) {
$id_buku = $_GET['Number'];
    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuID = $id_buku");
    if(mysqli_num_rows($query) > 0 ) {
        $buku = mysqli_fetch_assoc($query);
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Ulasan Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Ulasan Buku</li>
                        </ol>
                        
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Ulasan Buku
                            </div>
                            <div class="card-body">
                               <div class="container">
                    <div class="row">
                       <div class="row">
   

    <div class="col-xl-6">
         <div class="card" style="width: 18rem; margin:5px;">
  <img src="../assets/img/book.jpg" class="card-img-top" alt="Buku">
         <div class="card-body">
    <h5 class="card-title"><?= $buku['Judul'] ?></h5>
    <p class="card-text">Nama Penulis : <?= $buku['Penulis'] ?></p>
    <p class="card-text">Nama Penerbit : <?= $buku['Penerbit'] ?></p>
    <p class="card-text">Tahun Terbit : <?= $buku['TahunTerbit'] ?></p>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Pinjam</button>
  </div>
    </div>
</div>

<div class="col-xl-6  mt-5">
  <h2>Ulasan Buku</h2>
  <div class="container" style="max-height:500px;overflow-y:scroll">
  <?php 
  $query = mysqli_query($koneksi, "SELECT ub.*, u.*, b.* FROM ulasanbuku ub
                  JOIN user u ON ub.UserID = u.UserID
                  JOIN buku b ON ub.BukuID = b.BukuID WHERE b.BukuID = $id_buku ");
  if(mysqli_num_rows($query)) {
  while($u = mysqli_fetch_array($query)) { 
  ?>
  <div class="media mt-4">
    <img src="../assets/img/admin.png" class="mr-3 rounded-circle" style="width: 50px; height: 50px;" alt="User Image">
    <div class="media-body">
      <h5 class=""><?= $u['NamaLengkap'] ?></h5>
      <p style="margin-bottom:-5px;">Rating <?= $u['Rating'] ?></p>
      <p><?= $u['Ulasan'] ?></p>
    </div>
  </div>
<?php } 
} else { ?>
 <div class="media mt-4">
    <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Image">
    <div class="media-body">
      <h5 class="mt-0">Nelson Mandela</h5>
      <p>"Pendidikan adalah senjata paling ampuh yang bisa Anda gunakan untuk mengubah dunia."</p>
    </div>
  </div>
<?php } ?>
</div>
 
</div>
  </div>
                
                </div>
                </div>
                            </div>
                        </div>

                       
                    </div>
                </main>
<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="../crud.php" method="post">
        <input type="hidden" name="idpeminjam" value="<?= $all['UserID'] ?>">
        <input type="hidden" name="idbuku" value="<?= $buku['BukuID'] ?>">
          <input type="hidden" name="header" value="pinjam.php">
        <div class="row">
          <div class="col-xl-6">
            <div class="mb-3">
              <label for="peminjam" class="form-label">Nama Peminjam</label>
              <input type="text" class="form-control" required value="<?= $all['NamaLengkap'] ?>" name="namapeminjam" id="peminjam" placeholder="Masukkan Peminjam Buku">
            </div>
            <div class="mb-3">
              <label for="buku" class="form-label">Buku Yang Dipinjam</label>
              <input type="text" class="form-control" required value="<?= $buku['Judul'] ?>" name="namabuku" id="buku" placeholder="Masukkan Buku">
            </div>
           
          </div>
          <div class="col-xl-6">
             <div class="mb-3">
                                <label for="tanggalpinjam" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" required name="tanggalpinjam" id="tanggalpinjam" placeholder="Masukkan Kategori Buku">
                            </div>
          </div>
        </div>
      
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="pinjam_buku" class="btn btn-primary">Pinjam</button>
      </div>
        </form>
    </div>
  </div>
</div>

               <?php 
               include '../layouts/footer.php';
               ?>



<?php
    } else {
?>

<?php
    }
}
?>