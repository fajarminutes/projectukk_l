 <?php 
 include '../layouts/header_petugas.php';
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
                            <div class="mb-3">
                                <label for="buku" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" required name="namabuku" id="buku" placeholder="Masukkan Nama Buku">
                            </div>
                              <div class="mb-3">
                                <label for="penulis" class="form-label">Nama Penulis Buku</label>
                                <input type="text" class="form-control" required name="namapenulis" id="penulis" placeholder="Masukkan Nama Penulis">
                            </div>
                             <div class="mb-3">
                                <label for="penerbit" class="form-label">Nama Penerbit Buku</label>
                                <input type="text" class="form-control" required name="namapenerbit" id="penerbit" placeholder="Masukkan Nama Penerbit">
                            </div>
                             <div class="mb-3">
                                <label for="terbit" class="form-label">Tahun Terbit Buku</label>
                                <input type="number" class="form-control" required name="tahunterbit" id="terbit" placeholder="Masukkan Tahun Terbit Buku">
                            </div>
                         
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="tambah_buku" class="btn btn-primary">Tambah</button>
      </div>
       </form>
    </div>
  </div>
</div>

      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Buku
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nama Buku</th>
                                          <th>Penulis</th>
                                          <th>Penerbit</th>
                                          <th>Tahun Terbit</th>
                                          <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                     <?php
        $no = 1;
        // Query untuk mengambil data dari tabel buku
        $query = "SELECT * FROM buku";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++. "</td>";
            echo "<td>" . $row['Judul'] . "</td>";
            echo "<td>" . $row['Penulis'] . "</td>";
            echo "<td>" . $row['Penerbit'] . "</td>";
            echo "<td>" . $row['TahunTerbit'] . "</td>";
            echo '<td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$row['BukuID'].'">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['BukuID'].'">Delete</button>
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
$query_Data = "SELECT * FROM buku";
$d = mysqli_query($koneksi, $query_Data);

while ($r = mysqli_fetch_assoc($d)) {
    ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?php echo $r['BukuID']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">Edit Buku</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="../crud.php" method="post">
              <input type="hidden" name="id" value="<?php echo $r['BukuID']; ?>">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Buku</label>
                <input type="text" class="form-control" required name="namabuku" id="formGroupExampleInput" value="<?php echo $r['Judul']; ?>" placeholder="Masukkan Nama Buku Anda">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Penulis Buku</label>
                <input type="text" class="form-control" required name="namapenulis" id="formGroupExampleInput2" value="<?php echo $r['Penulis']; ?>" placeholder="Masukkan Nama Penulis Buku">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" required name="namapenerbit" id="formGroupExampleInput3" value="<?php echo $r['Penerbit']; ?>" placeholder="Masukkan Nama Penerbit Buku">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput4" class="form-label">Tahun Terbit Buku</label>
                <input type="number" class="form-control" required name="tahunterbit" id="formGroupExampleInput4" value="<?php echo $r['TahunTerbit']; ?>" placeholder="Masukkan Tahun Terbit Buku">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="edit_buku" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Hapus -->
  <div class="modal fade" id="deleteModal<?php echo $r['BukuID']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Buku</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapus buku ini?</p>
        </div>
        <div class="modal-footer">
          <form action="../crud.php" method="post">
            <input type="hidden" name="id" value="<?php echo $r['BukuID']; ?>">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" name="hapus_buku" class="btn btn-danger">Hapus</button>
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

