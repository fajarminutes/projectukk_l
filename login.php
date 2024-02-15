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
                        <h1 class="text-center">Login</h1>
                        <div class="col-xl-12 mx-auto">
                            <form action="crud.php" method="post">
                               
                                    <?php 
                                    if(isset($_SESSION['error'])) {
                                        echo ' <div class="alert alert-danger" role="alert">';
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        echo ' </div>';
                                    } 
                                    ?>
                                   
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Masukkan Email Anda">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Password Anda">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" name="login_peminjam" type="submit">Login</button>
                                <a href="register.php" class="btn btn-success">Register</a>
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