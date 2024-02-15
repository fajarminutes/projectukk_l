<?php 
include 'layouts/header.php';
include 'layouts/navbar.php';
?>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-6 mx-auto"> <!-- Menambahkan mx-auto untuk membuatnya menjadi tengah -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Selamat Datang Di Perpustakaan Digital</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Register</h1>
                        <div class="col-xl-12 mx-auto">
                            <form action="crud.php" method="post">
                                <div class="row">
                                <div class="col-lg-6">
                             <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" required id="nama" placeholder="Masukkan Nama Lengkap Anda">
                            </div>
                             <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required id="username" placeholder="Masukkan Username Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" required id="email" placeholder="Masukkan Email Anda">
                            </div>

                            </div>

                            <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="floatingTextarea" class="form-label">Alamat</label>
                               <div class="form-floating">
  <textarea name="alamat" class="form-control" required id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" required name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                            </div>
                             <div class="mb-3">
                                <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                                <input type="number"  required name="konfirmasi_password" class="form-control" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password Anda">
                            </div>

                           
                            </div>
                             <div class="mb-3">
                                <button class="btn btn-primary" name="register_admin" type="submit">Register</button>
                                 <a href="login.php" class="btn btn-success">Login</a>
                            </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>