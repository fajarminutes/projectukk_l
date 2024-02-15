<?php 
include '../layouts/header_petugas.php';

// Mendapatkan nilai tanggal dari parameter URL
$tanggalMulai = isset($_GET['tanggal_mulai']) ? $_GET['tanggal_mulai'] : '';
$tanggalSelesai = isset($_GET['tanggal_selesai']) ? $_GET['tanggal_selesai'] : '';

// Jika tidak ada tanggal yang dipilih, atur rentang tanggal pada bulan ini
if (empty($tanggalMulai) && empty($tanggalSelesai)) {
    $firstDayOfMonth = date('Y-m-01');
    $lastDayOfMonth = date('Y-m-t');

    $tanggalMulai = $firstDayOfMonth;
    $tanggalSelesai = $lastDayOfMonth;
}

?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header ">
                    <h2>Laporan Peminjaman Buku</h2>
                    <h5>Tanggal : <?= date('d-m-Y', strtotime($tanggalMulai)) ?> Sampai <?= date('d-m-Y', strtotime($tanggalSelesai)) ?></h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <!-- Tambahkan header tabel sesuai kebutuhan -->
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
                            $no = 1;
                            // Query untuk mengambil data dari tabel peminjaman dan menggabungkannya dengan tabel user dan buku
                            // Sesuaikan query ini dengan kondisi filter tanggal
                            $query = "SELECT p.*, u.NamaLengkap, b.Judul FROM peminjaman p
                                      JOIN user u ON p.UserID = u.UserID
                                      JOIN buku b ON p.BukuID = b.BukuID
                                      WHERE (p.TanggalPeminjaman >= '$tanggalMulai' AND p.TanggalPeminjaman <= '$tanggalSelesai')";
                            $result = mysqli_query($koneksi, $query);

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
                                echo '<td>';
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.print();
</script>

</body>
</html>
