<?php 
include 'layouts/koneksi.php';


// Tambah Pengguna
if(isset($_POST['register_peminjam'])) {
    // Ambil data dari formulir register
    $namaLengkap = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];  // Sesuaikan dengan formulir Anda
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasi_password'];

    // Query untuk memeriksa apakah email sudah ada
    $queryCekEmail = "SELECT * FROM user WHERE Email = '$email'";
    $resultCekEmail = mysqli_query($koneksi, $queryCekEmail);

    // Query untuk memeriksa apakah username sudah ada
    $queryCekUsername = "SELECT * FROM user WHERE Username = '$username'";
    $resultCekUsername = mysqli_query($koneksi, $queryCekUsername);

    // Cek apakah email sudah ada
    if($resultCekEmail && mysqli_num_rows($resultCekEmail) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location.href = 'register.php';</script>";
    } elseif ($resultCekUsername && mysqli_num_rows($resultCekUsername) > 0) {
        // Cek apakah username sudah ada
        echo "<script>alert('Username sudah terdaftar!'); window.location.href = 'register.php';</script>";
    } elseif ($password != $konfirmasiPassword) {
        // Cek apakah konfirmasi password sesuai
        echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location.href = 'register.php';</script>";
    } else {
        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data pengguna ke dalam tabel
        $queryTambahPengguna = "INSERT INTO user (NamaLengkap, Username, Password, Email, Alamat, Level) VALUES ('$namaLengkap', '$username', '$hashedPassword', '$email', '$alamat', '3')";
        $resultTambahPengguna = mysqli_query($koneksi, $queryTambahPengguna);

        if($resultTambahPengguna) {
            echo "<script>alert('Pengguna berhasil ditambahkan!'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan dalam menambahkan pengguna.'); window.location.href = 'register.php';</script>";
        }
    }
}
// Tambah Pengguna
if(isset($_POST['register_petugas'])) {
    // Ambil data dari formulir register
    $namaLengkap = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];  // Sesuaikan dengan formulir Anda
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasi_password'];

    // Query untuk memeriksa apakah email sudah ada
    $queryCekEmail = "SELECT * FROM user WHERE Email = '$email'";
    $resultCekEmail = mysqli_query($koneksi, $queryCekEmail);

    // Query untuk memeriksa apakah username sudah ada
    $queryCekUsername = "SELECT * FROM user WHERE Username = '$username'";
    $resultCekUsername = mysqli_query($koneksi, $queryCekUsername);

    // Cek apakah email sudah ada
    if($resultCekEmail && mysqli_num_rows($resultCekEmail) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location.href = 'admin/petugas.php';</script>";
    } elseif ($resultCekUsername && mysqli_num_rows($resultCekUsername) > 0) {
        // Cek apakah username sudah ada
        echo "<script>alert('Username sudah terdaftar!'); window.location.href = 'admin/petugas.php';</script>";
    } elseif ($password != $konfirmasiPassword) {
        // Cek apakah konfirmasi password sesuai
        echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location.href = 'admin/petugas.php';</script>";
    } else {
        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data pengguna ke dalam tabel
        $queryTambahPengguna = "INSERT INTO user (NamaLengkap, Username, Password, Email, Alamat, Level) VALUES ('$namaLengkap', '$username', '$hashedPassword', '$email', '$alamat', '3')";
        $resultTambahPengguna = mysqli_query($koneksi, $queryTambahPengguna);

        if($resultTambahPengguna) {
            echo "<script>alert('Pengguna berhasil ditambahkan!'); window.location.href = ''admin/petugas.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan dalam menambahkan pengguna.'); window.location.href = 'admin/petugas.php';</script>";
        }
    }
}
// Tambah Admin
if(isset($_POST['register_admin'])) {
    // Ambil data dari formulir register
    $namaLengkap = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];  // Sesuaikan dengan formulir Anda
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasi_password'];

    // Query untuk memeriksa apakah email sudah ada
    $queryCekEmail = "SELECT * FROM user WHERE Email = '$email'";
    $resultCekEmail = mysqli_query($koneksi, $queryCekEmail);

    // Query untuk memeriksa apakah username sudah ada
    $queryCekUsername = "SELECT * FROM user WHERE Username = '$username'";
    $resultCekUsername = mysqli_query($koneksi, $queryCekUsername);

    // Cek apakah email sudah ada
    if($resultCekEmail && mysqli_num_rows($resultCekEmail) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location.href = 'register-admin.php';</script>";
    } elseif ($resultCekUsername && mysqli_num_rows($resultCekUsername) > 0) {
        // Cek apakah username sudah ada
        echo "<script>alert('Username sudah terdaftar!'); window.location.href = 'register-admin.php';</script>";
    } elseif ($password != $konfirmasiPassword) {
        // Cek apakah konfirmasi password sesuai
        echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location.href = 'register-admin.php';</script>";
    } else {
        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data pengguna ke dalam tabel
        $queryTambahPengguna = "INSERT INTO user (NamaLengkap, Username, Password, Email, Alamat, Level) VALUES ('$namaLengkap', '$username', '$hashedPassword', '$email', '$alamat', '1')";
        $resultTambahPengguna = mysqli_query($koneksi, $queryTambahPengguna);

        if($resultTambahPengguna) {
            echo "<script>alert('Pengguna berhasil ditambahkan!'); window.location.href = 'admin.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan dalam menambahkan pengguna.'); window.location.href = 'register-admin.php';</script>";
        }
    }
}
// Untuk login pengguna/petugas
if(isset($_POST['login_peminjam'])) {
    // Ambil data dari formulir login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna berdasarkan email
    $query = "SELECT * FROM user WHERE Email = '$email'";
    $result = mysqli_query($koneksi, $query);

   if($result) {
    // Cek apakah pengguna dengan email tersebut ditemukan
    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password menggunakan password_verify
        if(password_verify($password, $user['Password'])) {
          if ($user['Level'] == 2) {
// Password cocok, login berhasil
$_SESSION['login_petugas'] = $user['UserID'];
            echo "<script>alert('Login berhasil!'); window.location.href = 'petugas/index.php';</script>";
            } else if($user['Level'] == 3) {
  // Password cocok, login berhasil
  $_SESSION['login_peminjam'] = $user['UserID'];
            echo "<script>alert('Login berhasil!'); window.location.href = 'peminjam/index.php';</script>";
            } else {
                 echo "<script>alert('Anda Penyusup!'); window.location.href = 'login.php';</script>";
            }
        } else {
            // Password tidak cocok, tampilkan pesan error
            echo "<script>alert('Password salah!'); window.location.href = 'login.php';</script>";
        }
    } else {
        // Pengguna dengan email tersebut tidak ditemukan
        echo "<script>alert('Pengguna dengan email tersebut tidak ditemukan!'); window.location.href = 'login.php';</script>";
    }
} else {
    // Terjadi kesalahan dalam menjalankan query
    echo "<script>alert('Terjadi kesalahan dalam melakukan login.'); window.location.href = 'login.php';</script>";
}

}

// Untuk login admin
if(isset($_POST['login_admin'])) {
    // Ambil data dari formulir login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna berdasarkan email
    $query = "SELECT * FROM user WHERE Email = '$email'";
    $result = mysqli_query($koneksi, $query);

   if($result) {
    // Cek apakah pengguna dengan email tersebut ditemukan
    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password menggunakan password_verify
        if(password_verify($password, $user['Password'])) {
            if($user['Level'] == 1) {
 // Password cocok, login berhasil
                    $_SESSION['login_admin'] = $user['UserID'];
            echo "<script>alert('Login berhasil!'); window.location.href = 'admin/index.php';</script>";
            } else {
                 echo "<script>alert('Anda Penyusup!'); window.location.href = 'admin.php';</script>";
            }
        } else {
            // Password tidak cocok, tampilkan pesan error
            echo "<script>alert('Password salah!'); window.location.href = 'admin.php';</script>";
        }
    } else {
        // Pengguna dengan email tersebut tidak ditemukan
        echo "<script>alert('Pengguna dengan email tersebut tidak ditemukan!'); window.location.href = 'admin.php';</script>";
    }
} else {
    // Terjadi kesalahan dalam menjalankan query
    echo "<script>alert('Terjadi kesalahan dalam melakukan login.'); window.location.href = 'admin.php';</script>";
}

}

// Tambah Kategori Buku
if(isset($_POST['tambah_kategori'])) {
    // Ambil data dari formulir tambah kategori
    $kategori = $_POST['namakategori'];

    // Query untuk memeriksa apakah kategori sudah ada
    $queryCek = "SELECT * FROM kategoribuku WHERE NamaKategori = '$kategori'";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if($resultCek) {
        // Cek apakah kategori sudah ada
        if(mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Kategori sudah ada!'); window.location.href = 'admin/kategori.php';</script>";
        } else {
            // Jika kategori belum ada, tambahkan ke database
            $queryTambah = "INSERT INTO kategoribuku (NamaKategori) VALUES ('$kategori')";
            $resultTambah = mysqli_query($koneksi, $queryTambah);

            if($resultTambah) {
                echo "<script>alert('Kategori berhasil ditambahkan!'); window.location.href = 'admin/kategori.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam menambahkan kategori.'); window.location.href = 'admin/kategori.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa kategori.'); window.location.href = 'admin/kategori.php';</script>";
    }
}
// Ubah Kategori Buku
if (isset($_POST['edit_kategori'])) {
    $id = $_POST['id'];
    $kategoriBaru = $_POST['namakategori'];

    // Query untuk memeriksa apakah kategori sudah ada
    $queryCek = "SELECT * FROM kategoribuku WHERE NamaKategori = '$kategoriBaru' AND KategoriID != $id";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if ($resultCek) {
        // Cek apakah kategori sudah ada
        if (mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Kategori sudah ada!'); window.location.href = 'admin/kategori.php';</script>";
        } else {
            // Jika kategori belum ada, lakukan penyuntingan
            $queryEdit = "UPDATE kategoribuku SET NamaKategori = '$kategoriBaru' WHERE KategoriID = $id";
            $resultEdit = mysqli_query($koneksi, $queryEdit);

            if ($resultEdit) {
                echo "<script>alert('Kategori berhasil diubah!'); window.location.href = 'admin/kategori.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam mengubah kategori.'); window.location.href = 'admin/kategori.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa kategori.'); window.location.href = 'admin/kategori.php';</script>";
    }
}
// Hapus Kategori Buku
if (isset($_POST['hapus_kategori'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus kategori
    $queryHapus = "DELETE FROM kategoribuku WHERE KategoriID = $idHapus";
    $resultHapus = mysqli_query($koneksi, $queryHapus);

    if ($resultHapus) {
        echo "<script>alert('Kategori berhasil dihapus!'); window.location.href = 'admin/kategori.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus kategori.'); window.location.href = 'admin/kategori.php';</script>";
    }
}

// Tambah Buku
if(isset($_POST['tambah_buku'])) {
    // Ambil data dari formulir tambah buku
    $judul = $_POST['namabuku'];
    $penulis = $_POST['namapenulis'];
    $penerbit = $_POST['namapenerbit'];
    $tahunTerbit = $_POST['tahunterbit'];

    // Query untuk memeriksa apakah buku sudah ada
    $queryCek = "SELECT * FROM buku WHERE Judul = '$judul'";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if($resultCek) {
        // Cek apakah buku sudah ada
        if(mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Buku sudah ada!'); window.location.href = 'admin/buku.php';</script>";
        } else {
            // Jika buku belum ada, tambahkan ke database
            $queryTambah = "INSERT INTO buku (Judul, Penulis, Penerbit, TahunTerbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahunTerbit')";
            $resultTambah = mysqli_query($koneksi, $queryTambah);

            if($resultTambah) {
                echo "<script>alert('Buku berhasil ditambahkan!'); window.location.href = 'admin/buku.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam menambahkan buku.'); window.location.href = 'admin/buku.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa buku.'); window.location.href = 'admin/buku.php';</script>";
    }
}
// Edit Buku
if (isset($_POST['edit_buku'])) {
    $id = $_POST['id'];
    $judulBaru = $_POST['namabuku'];
    $penulisBaru = $_POST['namapenulis'];
    $penerbitBaru = $_POST['namapenerbit'];
    $tahunTerbitBaru = $_POST['tahunterbit'];

    // Query untuk memeriksa apakah judul sudah ada
    $queryCek = "SELECT * FROM buku WHERE Judul = '$judulBaru' AND BukuID != $id";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if ($resultCek) {
        // Cek apakah judul sudah ada
        if (mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Judul buku sudah ada!'); window.location.href = 'admin/buku.php';</script>";
        } else {
            // Jika judul belum ada, lakukan penyuntingan
            $queryEdit = "UPDATE buku SET Judul = '$judulBaru', Penulis = '$penulisBaru', Penerbit = '$penerbitBaru', TahunTerbit = '$tahunTerbitBaru' WHERE BukuID = $id";
            $resultEdit = mysqli_query($koneksi, $queryEdit);

            if ($resultEdit) {
                echo "<script>alert('Buku berhasil diubah!'); window.location.href = 'admin/buku.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam mengubah buku.'); window.location.href = 'admin/buku.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa judul buku.'); window.location.href = 'admin/buku.php';</script>";
    }
}
// Hapus Buku
if (isset($_POST['hapus_buku'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus buku
    $queryHapus = "DELETE FROM buku WHERE BukuID = $idHapus";
    $resultHapus = mysqli_query($koneksi, $queryHapus);

    if ($resultHapus) {
        echo "<script>alert('Buku berhasil dihapus!'); window.location.href = 'admin/buku.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus buku.'); window.location.href = 'admin/buku.php';</script>";
    }
}

// Tambah Relasi Buku dan Kategori Buku
if (isset($_POST['tambah_relasi'])) {
    // Ambil data dari formulir tambah relasi
    $bukuID = $_POST['buku'];
    $kategoriID = $_POST['kategori'];

    // Query untuk memeriksa apakah relasi sudah ada
    $queryCekRelasi = "SELECT * FROM kategoribuku_relasi WHERE BukuID = $bukuID AND KategoriID = $kategoriID";
    $resultCekRelasi = mysqli_query($koneksi, $queryCekRelasi);

    if ($resultCekRelasi) {
        // Cek apakah relasi sudah ada
        if (mysqli_num_rows($resultCekRelasi) > 0) {
            echo "<script>alert('Relasi sudah ada!'); window.location.href = 'admin/relasi.php';</script>";
        } else {
            // Jika relasi belum ada, tambahkan ke database
            $queryTambahRelasi = "INSERT INTO kategoribuku_relasi (BukuID, KategoriID) VALUES ($bukuID, $kategoriID)";
            $resultTambahRelasi = mysqli_query($koneksi, $queryTambahRelasi);

            if ($resultTambahRelasi) {
                echo "<script>alert('Relasi berhasil ditambahkan!'); window.location.href = 'admin/relasi.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam menambahkan relasi.'); window.location.href = 'admin/relasi.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa relasi.'); window.location.href = 'admin/relasi.php';</script>";
    }
}
// Edit Relasi
if (isset($_POST['edit_relasi'])) {
    $id = $_POST['id'];
    $bukuBaru = $_POST['buku'];
    $kategoriBaru = $_POST['kategori'];

    // Query untuk memeriksa apakah relasi sudah ada
    $queryCek = "SELECT * FROM kategoribuku_relasi WHERE BukuID = $bukuBaru AND KategoriID = $kategoriBaru AND KategoriBukuID != $id";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if ($resultCek) {
        // Cek apakah relasi sudah ada
        if (mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Relasi sudah ada!'); window.location.href = 'admin/relasi.php';</script>";
        } else {
            // Jika relasi belum ada, lakukan penyuntingan
            $queryEdit = "UPDATE kategoribuku_relasi SET BukuID = $bukuBaru, KategoriID = $kategoriBaru WHERE KategoriBukuID = $id";
            $resultEdit = mysqli_query($koneksi, $queryEdit);

            if ($resultEdit) {
                echo "<script>alert('Relasi berhasil diubah!'); window.location.href = 'admin/relasi.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam mengubah relasi.'); window.location.href = 'admin/relasi.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa relasi.'); window.location.href = 'admin/relasi.php';</script>";
    }
}

// Hapus Relasi
if (isset($_POST['hapus_relasi'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus relasi
    $queryHapus = "DELETE FROM kategoribuku_relasi WHERE KategoriBukuID = $idHapus";
    $resultHapus = mysqli_query($koneksi, $queryHapus);

    if ($resultHapus) {
        echo "<script>alert('Relasi berhasil dihapus!'); window.location.href = 'admin/relasi.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus relasi.'); window.location.href = 'admin/relasi.php';</script>";
    }
}

// Tambah Peminjaman Buku
if (isset($_POST['pinjam_buku'])) {
    // Ambil data dari formulir tambah peminjaman
    $userID = $_POST['idpeminjam'];
    $header = $_POST['header'];
    $bukuID = $_POST['idbuku'];
    $tanggalPeminjaman = $_POST['tanggalpinjam'];
    $statusPeminjaman = "Pinjam"; // Set status peminjaman

    // Insert data peminjaman ke dalam tabel
    $queryTambahPeminjaman = "INSERT INTO peminjaman (UserID, BukuID, TanggalPeminjaman, StatusPeminjaman) VALUES ($userID, $bukuID, '$tanggalPeminjaman', '$statusPeminjaman')";
    $resultTambahPeminjaman = mysqli_query($koneksi, $queryTambahPeminjaman);

    if ($resultTambahPeminjaman) {
        if($header === "peminjaman.php") {
            echo "<script>alert('Peminjaman berhasil ditambahkan!'); window.location.href = 'peminjam/peminjaman.php';</script>";
        } else if($header === "pinjam.php") {

            echo "<script>alert('Peminjaman berhasil ditambahkan!'); window.location.href = 'peminjam/pinjam.php';</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menambahkan peminjaman.'); window.location.href = 'peminjam/pinjam.php';</script>";
    }
}


// Edit Peminjaman
if (isset($_POST['edit_peminjaman'])) {
    $id = $_POST['id'];
    $idpeminjam = $_POST['idpeminjam'];
    $idbuku = $_POST['idbuku'];
    $tanggalPengembalian = $_POST['tanggalPengembalian'];
    $komentar = $_POST['komentar'];
    $rating = $_POST['rating'];


    // Query untuk melakukan penyuntingan data
    $queryEditPeminjaman = "UPDATE peminjaman SET TanggalPengembalian = '$tanggalPengembalian', StatusPeminjaman = 'Menunggu' WHERE PeminjamanID = $id";
    $resultEditPeminjaman = mysqli_query($koneksi, $queryEditPeminjaman);

    if ($resultEditPeminjaman) {
        $queryEdit = "INSERT INTO ulasanbuku (UserID, BukuID, Ulasan, Rating) VALUES ('$idpeminjam', '$idbuku', '$komentar', '$rating')";
    $resultEdit = mysqli_query($koneksi, $queryEdit);
     if ($resultEdit) {
        echo "<script>alert('Peminjaman berhasil diubah!'); window.location.href = 'peminjam/peminjaman.php';</script>";
        } else {
        echo "<script>alert('Terjadi kesalahan dalam mengubah peminjaman.'); window.location.href = 'peminjam/peminjaman.php';</script>";
    }
    
    } else {
        echo "<script>alert('Terjadi kesalahan dalam mengubah peminjaman.'); window.location.href = 'peminjam/peminjaman.php';</script>";
    }
}

// Hapus Peminjaman
if (isset($_POST['hapus_peminjaman'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus data peminjaman
    $queryHapusPeminjaman = "DELETE FROM peminjaman WHERE PeminjamanID = $idHapus";
    $resultHapusPeminjaman = mysqli_query($koneksi, $queryHapusPeminjaman);

    if ($resultHapusPeminjaman) {
        echo "<script>alert('Peminjaman berhasil dihapus!'); window.location.href = 'peminjam/peminjaman.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus peminjaman.'); window.location.href = 'peminjam/peminjaman.php';</script>";
    }
}

// Edit Ulasan
if (isset($_POST['edit_ulasan'])) {
    $id = $_POST['id'];
    $komentar = $_POST['komentar'];
    $rating = $_POST['rating'];

    // Query untuk melakukan penyuntingan data
    $queryEditUlasan = "UPDATE ulasanbuku SET Ulasan = '$komentar', Rating = $rating WHERE UlasanID = $id";
    $resultEditUlasan = mysqli_query($koneksi, $queryEditUlasan);

    if ($resultEditUlasan) {
        echo "<script>alert('Ulasan berhasil diubah!'); window.location.href = 'peminjam/komentar.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam mengubah ulasan.'); window.location.href = 'peminjam/komentar.php';</script>";
    }
}

// Hapus Ulasan
if (isset($_POST['hapus_ulasan'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus data ulasan
    $queryHapusUlasan = "DELETE FROM ulasanbuku WHERE UlasanID = $idHapus";
    $resultHapusUlasan = mysqli_query($koneksi, $queryHapusUlasan);

    if ($resultHapusUlasan) {
        echo "<script>alert('Ulasan berhasil dihapus!'); window.location.href = 'peminjam/komentar.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus ulasan.'); window.location.href = 'peminjam/komentar.php';</script>";
    }
}

// Tambah Relasi Koleksi Pribadi Buku
if (isset($_POST['tambah_koleksi'])) {
    // Ambil data dari formulir tambah relasi
    $id = $_POST['idpeminjam'];
    $bukuID = $_POST['buku'];

    // Query untuk memeriksa apakah relasi sudah ada
    $queryCekRelasi = "SELECT * FROM koleksipribadi WHERE BukuID = $bukuID AND UserID = $id";
    $resultCekRelasi = mysqli_query($koneksi, $queryCekRelasi);

    if ($resultCekRelasi) {
        // Cek apakah relasi sudah ada
        if (mysqli_num_rows($resultCekRelasi) > 0) {
            echo "<script>alert('Koleksi sudah ada!'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
        } else {
            // Jika relasi belum ada, tambahkan ke database
            $queryTambahRelasi = "INSERT INTO koleksipribadi (UserID, BukuID) VALUES ($id, $bukuID)";
            $resultTambahRelasi = mysqli_query($koneksi, $queryTambahRelasi);

            if ($resultTambahRelasi) {
                echo "<script>alert('Koleksi berhasil ditambahkan!'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam menambahkan koleksi.'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa koleksi.'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
    }
}

// Edit Koleksi
if (isset($_POST['edit_koleksi'])) {
    $id = $_POST['id'];
    $idUser = $_POST['idUser'];
    $idBuku = $_POST['idBuku'];

    // Query untuk memeriksa apakah koleksi sudah ada
    $queryCek = "SELECT * FROM koleksipribadi WHERE UserID = $idUser AND BukuID = $idBuku AND KoleksiID != $id";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if ($resultCek) {
        // Cek apakah koleksi sudah ada
        if (mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Koleksi sudah ada!'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
        } else {
            // Jika koleksi belum ada, lakukan penyuntingan
            $queryEdit = "UPDATE koleksipribadi SET UserID = $idUser, BukuID = $idBuku WHERE KoleksiID = $id";
            $resultEdit = mysqli_query($koneksi, $queryEdit);

            if ($resultEdit) {
                echo "<script>alert('Koleksi berhasil diubah!'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam mengubah koleksi.'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa koleksi.'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
    }
}

// Hapus Koleksi
if (isset($_POST['hapus_koleksi'])) {
    $idHapus = $_POST['id'];

    // Query untuk menghapus koleksi
    $queryHapus = "DELETE FROM koleksipribadi WHERE KoleksiID = $idHapus";
    $resultHapus = mysqli_query($koneksi, $queryHapus);

    if ($resultHapus) {
        echo "<script>alert('Koleksi berhasil dihapus!'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan dalam menghapus koleksi.'); window.location.href = 'peminjam/koleksi-pribadi.php';</script>";
    }
}

// Ubah Data Pengguna
if (isset($_POST['ubah_pengguna'])) {
    $idPengguna = $_SESSION['login_peminjam']; // Gantilah sesuai dengan cara Anda menyimpan ID pengguna

    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah ada username atau email yang sama
    $queryCek = "SELECT * FROM user WHERE (Username = '$username' OR Email = '$email') AND UserID != $idPengguna";
    $resultCek = mysqli_query($koneksi, $queryCek);

    if ($resultCek) {
        // Cek apakah ada data yang sama
        if (mysqli_num_rows($resultCek) > 0) {
            echo "<script>alert('Username atau Email sudah digunakan!'); window.location.href = 'peminjam/profil.php';</script>";
        } else {
            // Jika tidak ada data yang sama, lanjutkan proses penyuntingan
            $queryUpdate = "UPDATE user SET 
                            NamaLengkap = '$nama',
                            Username = '$username',
                            Email = '$email',
                            Alamat = '$alamat'";

            // Periksa apakah password diisi
            if (!empty($password)) {
                // Jika diisi, tambahkan ke query
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $queryUpdate .= ", Password = '$hashedPassword'";
            }

            $queryUpdate .= " WHERE UserID = $idPengguna";

            $resultUpdate = mysqli_query($koneksi, $queryUpdate);

            if ($resultUpdate) {
                echo "<script>alert('Data pengguna berhasil diubah!'); window.location.href = 'peminjam/profil.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan dalam mengubah data pengguna.'); window.location.href = 'peminjam/profil.php';</script>";
            }
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam memeriksa data pengguna.'); window.location.href = 'peminjam/profil.php';</script>";
    }
}

// Edit Peminjaman Oleh Admin
if (isset($_POST['edit_peminjaman_p'])) {
    $id = $_POST['id'];
    $idpeminjam = $_POST['idpeminjam'];
    $status = $_POST['status'];


    // Query untuk melakukan penyuntingan data
    $queryEditPeminjaman = "UPDATE peminjaman SET  StatusPeminjaman = 'Selesai' WHERE PeminjamanID = $id";
    $resultEditPeminjaman = mysqli_query($koneksi, $queryEditPeminjaman);

    if ($resultEditPeminjaman) {
       
        echo "<script>alert('Peminjaman berhasil diubah!'); window.location.href = 'admin/peminjaman.php';</script>";
    
    } else {
        echo "<script>alert('Terjadi kesalahan dalam mengubah peminjaman.'); window.location.href = 'admin/peminjaman.php';</script>";
    }
}

?>