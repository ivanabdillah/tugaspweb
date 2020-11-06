<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Peminjaman Buku</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<?php 
	session_start();
	if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}
?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Register</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Log Out</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">GedungPintar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div div class="card-header">
                            <h3>Entri Peminjaman Baru Gedung Pandai</h3>
                        </div>
                        <form action="baruprocess.php" role="form" method="post">
                            <div class="card-body">
                            <p>
            <label>Judul Buku: </label>
            <input type="text" name="judul" placeholder="Judul buku baru masuk">
        </p> 
                            <p>
            <label>Genre Buku: </label>
            <select name="genre">
                <option value="ensiklopedia">Ensiklopedia</option>
                <option value="humor">Humor</option>
                <option value="ilmu-pengetahuan">Ilmu Pengetahuan</option>
                <option value="romansa">Romansa</option>
                <option value="sejarah">Sejarah</option>
                <option value="horor">Horor</option>
            </select>
        </p>
        <p>
            <label>Deskripsi Buku: </label>
            <textarea name="deskripsi" cols="25" rows="5"></textarea>
        </p>
        <p>
            <label>Tanggal Peminjaman: </label>
            <input type="text" name="tgl_pinjam" placeholder="yyyy-mm-dd">
        </p>
        <p>
            <label>Tanggal Dikembalikan: </label>
            <input type="text" name="tgl_kembali" placeholder="yyyy-mm-dd">
        </p>
        <p>
            <label>Nama Peminjam: </label>
            <input type="text" name="nama_peminjam" placeholder="Nama Lengkap">
        </p>
                            </div>
                            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Buat</button>
                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>