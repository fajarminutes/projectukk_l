 <?php 
 include '../layouts/header_peminjam.php';
 include '../layouts/navbar.php';
 include '../layouts/sidebar.php';
 ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Profil</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Profil</li>
                        </ol>
                        
      
 <div class="card mt-3">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Profil
                            </div>
                            <div class="card-body">
                               <div class="container">
                    <div class="row">
                   <form action="../crud.php" method="post">
                                <div class="row">
                                <div class="col-lg-6">
                             <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" required class="form-control" name="nama" id="nama" value="<?= $all['NamaLengkap'] ?>"  placeholder="Masukkan Nama Lengkap Anda">
                            </div>
                             <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" required class="form-control" name="username" id="username"  value="<?= $all['Username'] ?>" placeholder="Masukkan Username Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" required class="form-control" name="email" id="email" value="<?= $all['Email'] ?>" placeholder="Masukkan Email Anda">
                            </div>

                            </div>

                            <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="floatingTextarea" class="form-label">Alamat</label>
                               <div class="form-floating">
  <textarea name="alamat" required class="form-control" id="floatingTextarea"><?= $all['Alamat'] ?></textarea>
  <label for="floatingTextarea">Alamat</label>
</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                            </div>
                    

                           
                            </div>
                             <div class="mb-3">
                                <button class="btn btn-primary" name="ubah_pengguna" type="submit">Ubah</button>
                            </div>
                            </div>
                            </form>
                </div>
                </div>
                            </div>
                        </div>

                       
                    </div>
                </main>

               <?php 
               include '../layouts/footer.php';
               ?>

