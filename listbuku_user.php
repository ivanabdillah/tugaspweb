<?php include ('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
      <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Daftar Buku</title>
</head>
<body class="hold-transition sidebar-mini">
<?php 
//	session_start();
//	if($_SESSION['status']!="login"){
//	header("location:../index.php?pesan=belum_login");
//	}

session_start();
session_destroy();
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
        <a href="login.php" class="nav-link">Log In</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="register.php" class="nav-link">Register</a>
      </li>
    </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

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

  <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Buku di Gedung Pintar</h1>
                </div>
                
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
 
                                        <th>Judul Buku</th>
                                        <th>Genre Buku</th>
                                        <th>Deskripsi Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Dikembalikan</th>
                                        <th>Nama Peminjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                $sql = "SELECT * FROM data_buku";
                $query = mysqli_query($connect, $sql);

                while ($buku = mysqli_fetch_array($query)) {
                    echo "<tr>";


                    echo "<td>".$buku['judul']."</td>";
                    echo "<td>".$buku['genre']."</td>";
                    echo "<td>".$buku['deskripsi']."</td>";
                    echo "<td>".$buku['tgl_pinjam']."</td>";
                    echo "<td>".$buku['tgl_kembali']."</td>";
                    echo "<td>".$buku['nama_peminjam']."</td>";

                    echo "</tr>";
                }
            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>Silahkan hubungi Admin untuk melakukan peminjaman buku</h4>
                    <p>WhatsApp : 081243568372 <br>
                       IG : @gedungpintarbersama
                    </p>

                </div>
            </div>
        </div>
    </section>
</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>