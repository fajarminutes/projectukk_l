 <?php 
 include '../layouts/header_peminjam.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
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
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>No</th>
            <th>Nama Buku</th>
            <th>Ulasan Buku</th>
            <th>Rating</th>
        
            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                    <?php
        $no = 1;
        // Query untuk mengambil data dari tabel ulasanbuku dan menggabungkannya dengan tabel user dan buku
        $query = "SELECT ub.*, u.*, b.* FROM ulasanbuku ub
                  JOIN user u ON ub.UserID = u.UserID
                  JOIN buku b ON ub.BukuID = b.BukuID";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['Judul'] . "</td>";
            echo "<td>" . $row['Ulasan'] . "</td>";
            echo "<td>" . $row['Rating'] . "</td>";
            echo '<td> 
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$row['UlasanID'].'">
                        Edit
                    </button>';
              echo'
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$row['UlasanID'].'">
                        Delete
                    </button>
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
// Fetch data from ulasanbuku table
$queryUlasan = "SELECT * FROM ulasanbuku";
$resultUlasan = mysqli_query($koneksi, $queryUlasan);

while ($ulasan = mysqli_fetch_assoc($resultUlasan)) {
    ?>
    <!-- Modal Edit Ulasan -->
    <div class="modal fade" id="editModal<?php echo $ulasan['UlasanID']; ?>" tabindex="-1" aria-labelledby="editUlasanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUlasanModalLabel">Edit Ulasan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $ulasan['UlasanID']; ?>">
                        <div class="mb-3">
                            <label for="komentar" class="form-label">Komentar</label>
                            <textarea class="form-control" id="komentar" name="komentar" required rows="3"><?php echo $ulasan['Ulasan']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select class="form-select" name="rating" id="rating" required aria-label="Default select example">
                                <option value="1" <?php echo ($ulasan['Rating'] == 1) ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?php echo ($ulasan['Rating'] == 2) ? 'selected' : ''; ?>>2</option>
                                <option value="3" <?php echo ($ulasan['Rating'] == 3) ? 'selected' : ''; ?>>3</option>
                                <option value="4" <?php echo ($ulasan['Rating'] == 4) ? 'selected' : ''; ?>>4</option>
                                <option value="5" <?php echo ($ulasan['Rating'] == 5) ? 'selected' : ''; ?>>5</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" name="edit_ulasan" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Ulasan -->
    <div class="modal fade" id="deleteModal<?php echo $ulasan['UlasanID']; ?>" tabindex="-1" aria-labelledby="deleteUlasanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUlasanModalLabel">Hapus Ulasan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus ulasan ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $ulasan['UlasanID']; ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="hapus_ulasan" class="btn btn-danger">Hapus</button>
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