 <?php 
 include '../layouts/header_admin.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Peminjaman Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Peminjaman Buku</li>
                        </ol>
                        

      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Peminjaman Buku
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
            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                     <?php
        $no = 1;
        // Query untuk mengambil data dari tabel peminjaman dan menggabungkannya dengan tabel user dan buku
        $query = "SELECT p.*, u.NamaLengkap, b.Judul FROM peminjaman p
                  JOIN user u ON p.UserID = u.UserID
                  JOIN buku b ON p.BukuID = b.BukuID";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['NamaLengkap'] . "</td>";
            echo "<td>" . $row['Judul'] . "</td>";
            echo "<td>" . $row['TanggalPeminjaman'] . "</td>";
            if($row['TanggalPengembalian'] == NULL) {
            echo "<td>Masa Peminjaman</td>"; 
            } else {
            echo "<td>" . $row['TanggalPengembalian'] . "</td>";
            }
            echo "<td>" . $row['StatusPeminjaman'] . "</td>";
            echo '<td>';
            if($row['StatusPeminjaman'] === "Pinjam") {
              
            } else if($row['StatusPeminjaman']  === "Menunggu")  {
                 echo'
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$row['PeminjamanID'].'">
                        Edit
                    </button>';
              echo'
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['PeminjamanID'].'">
                        Delete
                    </button>
                </td>';
            } else {
                 echo'
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['PeminjamanID'].'">
                        Delete
                    </button>
                </td>';
            }
           
                    
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


