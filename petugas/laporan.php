 <?php 
 include '../layouts/header_petugas.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 
<?php
$no = 1;

// Cek apakah form filter telah disubmit
if (isset($_POST['filter'])) {
    // Ambil nilai tanggal dari form filter
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];

    // Query dengan filter tanggal peminjaman
    $query = "SELECT p.*, u.NamaLengkap, b.Judul FROM peminjaman p
              JOIN user u ON p.UserID = u.UserID
              JOIN buku b ON p.BukuID = b.BukuID
              WHERE TanggalPeminjaman BETWEEN '$tanggal_mulai' AND '$tanggal_selesai'";
} else {
    // Query tanpa filter tanggal peminjaman
    $query = "SELECT p.*, u.NamaLengkap, b.Judul FROM peminjaman p
              JOIN user u ON p.UserID = u.UserID
              JOIN buku b ON p.BukuID = b.BukuID";
}

$result = mysqli_query($koneksi, $query);
?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Laporan Peminjaman Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Laporan Peminjaman Buku</li>
                        </ol>

                        <form method="post" action="">
    <div class="mb-3">
        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo isset($_POST['tanggal_mulai']) ? $_POST['tanggal_mulai'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php echo isset($_POST['tanggal_selesai']) ? $_POST['tanggal_selesai'] : ''; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="filter">Filter</button>
    <a href="print.php?tanggal_mulai=<?php echo isset($_POST['tanggal_mulai']) ? $_POST['tanggal_mulai'] : ''; ?>&tanggal_selesai=<?php echo isset($_POST['tanggal_selesai']) ? $_POST['tanggal_selesai'] : ''; ?>" type="button" class="btn btn-success" target="_blank">Cetak</a>
</form>
                      
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Laporan Peminjaman Buku
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Buku Yang Dipinjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status Peminjaman</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                    <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . $row['NamaLengkap'] . "</td>";
                                echo "<td>" . $row['Judul'] . "</td>";
                                echo "<td>" . $row['TanggalPeminjaman'] . "</td>";
                                if ($row['TanggalPengembalian'] == NULL) {
                                    echo "<td>Masa Peminjaman</td>";
                                } else {
                                    echo "<td>" . $row['TanggalPengembalian'] . "</td>";
                                }
                                echo "<td>" . $row['StatusPeminjaman'] . "</td>";
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
// Fetch data from peminjaman table
$queryPeminjaman = "SELECT * FROM peminjaman";
$resultPeminjaman = mysqli_query($koneksi, $queryPeminjaman);

while ($peminjaman = mysqli_fetch_assoc($resultPeminjaman)) {
    ?>
    <!-- Modal Edit Peminjaman -->
    <div class="modal fade" id="editModal<?php echo $peminjaman['PeminjamanID']; ?>" tabindex="-1" aria-labelledby="editPeminjamanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPeminjamanModalLabel">Edit Peminjaman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $peminjaman['PeminjamanID']; ?>">
                        <input type="hidden" name="idpeminjam" value="<?php echo $peminjaman['UserID']; ?>">
                        <input type="hidden" name="idbuku" value="<?php echo $peminjaman['BukuID']; ?>">
<div class="mb-3">
  <label for="status" class="form-label">Status Peminjaman</label>
<input type="text" class="form-control" name="status" id="status" readonly value="Selesai">
</div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="edit_peminjaman_p" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Peminjaman -->
    <div class="modal fade" id="deleteModal<?php echo $peminjaman['PeminjamanID']; ?>" tabindex="-1" aria-labelledby="deletePeminjamanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePeminjamanModalLabel">Hapus Peminjaman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus peminjaman ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $peminjaman['PeminjamanID']; ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="hapus_peminjaman" class="btn btn-danger">Hapus</button>
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


