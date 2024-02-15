 <?php 
 include '../layouts/header_petugas.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Kategori Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Kategori Buku</li>
                        </ol>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Kategori
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
        <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Kategori Buku</label>
                                <input type="text" class="form-control" required name="namakategori" id="formGroupExampleInput" placeholder="Masukkan Kategori Buku">
                            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="tambah_kategori" class="btn btn-primary">Tambah</button>
      </div>
       </form>
    </div>
  </div>
</div>
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kategori Buku
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                          <th>Nama</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                     <?php
            $no = 1;
            // Query untuk mengambil data dari tabel (gantilah "kategoribuku" sesuai dengan nama tabel Anda)
$query = "SELECT * FROM kategoribuku";
$result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++. "</td>";
                echo "<td>" . $row['NamaKategori'] . "</td>";
                echo '<td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$row['KategoriID'].'">
  Edit
</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['KategoriID'].'">Delete</button>
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

                <?php
$query_Data = "SELECT * FROM kategoribuku";
$d = mysqli_query($koneksi, $query_Data);

while ($r = mysqli_fetch_assoc($d)) {
    ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?php echo $r['KategoriID']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">Edit Kategori</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="../crud.php" method="post">
              <input type="hidden" name="id" value="<?php echo $r['KategoriID']; ?>">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Kategori Buku</label>
                <input type="text" class="form-control" required name="namakategori" id="formGroupExampleInput" value="<?php echo $r['NamaKategori']; ?>" placeholder="Masukkan Kategori Buku">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="edit_kategori" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Hapus -->
  <div class="modal fade" id="deleteModal<?php echo $r['KategoriID']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
        </div>
        <div class="modal-footer">
          <form action="../crud.php" method="post">
            <input type="hidden" name="id" value="<?php echo $r['KategoriID']; ?>">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="hapus_kategori" class="btn btn-danger">Hapus</button>
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

