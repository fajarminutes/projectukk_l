 <?php 
 include '../layouts/header_admin.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Petugas Perpustakaan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Petugas Perpustakaan</li>
                        </ol>
                         <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Buku
</button>

<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../crud.php" method="post">
                                <div class="row">
                                <div class="col-lg-6">
                             <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" required name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda">
                            </div>
                             <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" required name="username" id="username" placeholder="Masukkan Username Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" required name="email" id="email" placeholder="Masukkan Email Anda">
                            </div>

                            </div>

                            <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="floatingTextarea" class="form-label">Alamat</label>
                               <div class="form-floating">
  <textarea name="alamat" class="form-control"  required id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" required name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                            </div>
                             <div class="mb-3">
                                <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                                <input type="number" required name="konfirmasi_password" class="form-control" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password Anda">
                            </div>

                           
                            </div>
                             
                            </div>
                            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="register_petugas" class="btn btn-primary">Tambah</button>
      </div>
       </form>
    </div>
  </div>
</div>
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Petugas Perpustakaan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                     <?php
        $no = 1;
        // Query untuk mengambil data dari tabel user
        $query = "SELECT * FROM user WHERE Level = 2";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++. "</td>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['NamaLengkap'] . "</td>";
            echo "<td>" . $row['Alamat'] . "</td>";
            echo '<td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$row['UserID'].'">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['UserID'].'">Delete</button>
                </td>';
            echo "</tr>";
        }
        ?>

                                   </tbody>
                                </table>
                            </div>
                        </div>

                       
                    </div>
                </main>

                <!-- Modal Edit -->
<?php
$queryDataUser = "SELECT * FROM user WHERE Level = 3";
$dataUser = mysqli_query($koneksi, $queryDataUser);

while ($rowUser = mysqli_fetch_assoc($dataUser)) {
?>
  <!-- Modal Edit -->
  <div class="modal fade" id="editModal<?php echo $rowUser['UserID']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../crud.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rowUser['UserID']; ?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" required name="nama" id="nama" value="<?php echo $rowUser['NamaLengkap']; ?>" placeholder="Masukkan Nama Lengkap Anda">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" required name="username" id="username" value="<?php echo $rowUser['Username']; ?>" placeholder="Masukkan Username Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" required name="email" id="email" value="<?php echo $rowUser['Email']; ?>" placeholder="Masukkan Email Anda">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" required name="alamat" id="alamat" placeholder="Masukkan Alamat Anda"><?php echo $rowUser['Alamat']; ?></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="edit_user" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Hapus -->
  <div class="modal fade" id="deleteModal<?php echo $rowUser['UserID']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapus user ini?</p>
        </div>
        <div class="modal-footer">
          <form action="../crud.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rowUser['UserID']; ?>">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="hapus_user" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>

               <?php 
               include '../layouts/footer.php';
               ?>


