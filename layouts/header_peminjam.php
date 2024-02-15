<?php 
include '../layouts/koneksi.php';
if(!isset($_SESSION['login_peminjam'])) {
    $_SESSION['error'] = 'Login Terlebih Dahulu!';
    header("Location: ../login.php");
}
if(isset($_SESSION['login_peminjam'])) {
  $id =  $_SESSION['login_peminjam'];
  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE UserID = $id");
  $all = mysqli_fetch_array($query);
  $id_user = $all['UserID'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  
 <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">