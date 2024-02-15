 <?php 
 include '../layouts/header_admin.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Relasi Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Relasi Buku</li>
                        </ol>
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Relasi
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
                                <label for="formGroupExampleInput" class="form-label">Buku</label>
                                <select class="form-select" name="buku" aria-label="Default select example">
  <option value="">Pilih</option>
  <?php
    // Query untuk mengambil data dari tabel buku
    $queryBuku = "SELECT BukuID, Judul FROM buku";
    $resultBuku = mysqli_query($koneksi, $queryBuku);

    // Memeriksa apakah query berhasil dijalankan
    if ($resultBuku) {
        // Menampilkan data sebagai opsi dalam elemen select
        while ($rowBuku = mysqli_fetch_assoc($resultBuku)) {
            echo "<option value='" . $rowBuku['BukuID'] . "'>" . $rowBuku['Judul'] . "</option>";
        }
    } else {
        echo "<option value=''>Error retrieving data</option>";
    }
  ?>
</select>

                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Kategori Buku</label>
                                <select class="form-select" name="kategori" aria-label="Default select example">
  <option value="">Pilih</option>
  <?php
    // Query untuk mengambil data dari tabel kategoribuku
    $querykategoribuku = "SELECT KategoriID, NamaKategori FROM kategoribuku";
    $resultkategoribuku = mysqli_query($koneksi, $querykategoribuku);

    // Memeriksa apakah query berhasil dijalankan
    if ($resultkategoribuku) {
        // Menampilkan data sebagai opsi dalam elemen select
        while ($rowkategoribuku = mysqli_fetch_assoc($resultkategoribuku)) {
            echo "<option value='" . $rowkategoribuku['KategoriID'] . "'>" . $rowkategoribuku['NamaKategori'] . "</option>";
        }
    } else {
        echo "<option value=''>Error retrieving data</option>";
    }
  ?>
</select>

                            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" name="tambah_relasi" class="btn btn-primary">Tambah</button>
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
            <th>Nama Buku</th>
            <th>Nama Kategori Buku</th>
            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                     <?php
        $no = 1;
        // Query untuk mengambil data dari tabel relasi
        $queryRelasi = "SELECT br.*, b.Judul, k.NamaKategori FROM kategoribuku_relasi br
                        JOIN buku b ON br.BukuID = b.BukuID
                        JOIN kategoribuku k ON br.KategoriID = k.KategoriID";
        $resultRelasi = mysqli_query($koneksi, $queryRelasi);

        while ($rowRelasi = mysqli_fetch_assoc($resultRelasi)) {
            echo "<tr>";
            echo "<td>" . $no++. "</td>";
            echo "<td>" . $rowRelasi['Judul'] . "</td>";
            echo "<td>" . $rowRelasi['NamaKategori'] . "</td>";
            echo '<td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal'.$rowRelasi['KategoriBukuID'].'">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal'.$rowRelasi['KategoriBukuID'].'">
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
$queryRelasiData = "SELECT br.*, b.Judul, k.NamaKategori FROM kategoribuku_relasi br
                    JOIN buku b ON br.BukuID = b.BukuID
                    JOIN kategoribuku k ON br.KategoriID = k.KategoriID";
$dataRelasi = mysqli_query($koneksi, $queryRelasiData);

while ($rowRelasiData = mysqli_fetch_assoc($dataRelasi)) {
    ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?php echo $rowRelasiData['KategoriBukuID']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Relasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $rowRelasiData['KategoriBukuID']; ?>">
                        <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Buku</label>
                                
<select class="form-select" name="buku" aria-label="Default select example">
  <option value="">Pilih</option>
  <?php
    // Query untuk mengambil data dari tabel buku
    $queryBuku = "SELECT BukuID, Judul FROM buku";
    $resultBuku = mysqli_query($koneksi, $queryBuku);

    // Memeriksa apakah query berhasil dijalankan
    if ($resultBuku) {
        // Menampilkan data sebagai opsi dalam elemen select
        while ($rowBuku = mysqli_fetch_assoc($resultBuku)) {
            $selected = ($rowBuku['BukuID'] == $rowRelasiData['BukuID']) ? 'selected' : '';
            echo "<option value='" . $rowBuku['BukuID'] . "' $selected>" . $rowBuku['Judul'] . "</option>";
        }
    } else {
        echo "<option value=''>Error retrieving data</option>";
    }
  ?>
</select>




                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Kategori Buku</label>
                               

<select class="form-select" name="kategori" aria-label="Default select example">
  <option value="">Pilih</option>
  <?php
    // Query untuk mengambil data dari tabel kategoribuku
    $querykategoribuku = "SELECT KategoriID, NamaKategori FROM kategoribuku";
    $resultkategoribuku = mysqli_query($koneksi, $querykategoribuku);

    // Memeriksa apakah query berhasil dijalankan
    if ($resultkategoribuku) {
        // Menampilkan data sebagai opsi dalam elemen select
        while ($rowkategoribuku = mysqli_fetch_assoc($resultkategoribuku)) {
            $selected = ($rowkategoribuku['KategoriID'] == $rowRelasiData['KategoriID']) ? 'selected' : '';
            echo "<option value='" . $rowkategoribuku['KategoriID'] . "' $selected>" . $rowkategoribuku['NamaKategori'] . "</option>";
        }
    } else {
        echo "<option value=''>Error retrieving data</option>";
    }
  ?>
</select>


                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="edit_relasi" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade" id="deleteModal<?php echo $rowRelasiData['KategoriBukuID']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Relasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus relasi ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="../crud.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $rowRelasiData['KategoriBukuID']; ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="hapus_relasi" class="btn btn-danger">Hapus</button>
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
