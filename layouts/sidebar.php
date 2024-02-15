<?php 
// untuk Admin
if(isset($all['Level']) && $all['Level'] == 1) {
    ?>
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link <?= $all['Level'] == 1 ? 'active' : '' ?> " href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Informasi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="kategori.php">Kategori Buku</a>
                                    <a class="nav-link" href="buku.php">Buku</a>
                                    <a class="nav-link" href="relasi.php">Relasi Buku dan Kategori</a>
                                    <a class="nav-link" href="peminjaman.php">Peminjaman Buku</a>
                                    <a class="nav-link" href="petugas.php">Petugas</a>
                                </nav>
                            </div>
                           
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="laporan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
<?php
    // Untuk Petugas
} else if(isset($all['Level']) && $all['Level'] == 2) {
    ?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link <?= $all['Level'] == 2 ? 'active' : '' ?> " href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Informasi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="kategori.php">Kategori Buku</a>
                                    <a class="nav-link" href="buku.php">Buku</a>
                                    <a class="nav-link" href="relasi.php">Relasi Buku dan Kategori</a>
                                    <a class="nav-link" href="peminjaman.php">Peminjaman Buku</a>
                                   
                                </nav>
                            </div>
                           
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="laporan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

<?php
    // Untuk Peminjam
} else if(isset($all['Level']) && $all['Level'] == 3) {
    ?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link <?= $all['Level'] == 3 ? 'active' : '' ?> " href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Informasi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="pinjam.php">Peminjaman Buku</a>
                                    <a class="nav-link" href="peminjaman.php">Tabel Peminjaman Buku</a>
                                    <a class="nav-link" href="komentar.php">Tabel Komentar</a>
                                    <a class="nav-link" href="koleksi-pribadi.php">Tabel Koleksi Buku Pribadi</a>
                                   
                                </nav>
                            </div>
                           
                            
                        </div>
                    </div>
                </nav>
            </div>
    <?php
} else { ?>

<?php
}
?>
