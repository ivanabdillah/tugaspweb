<?php 
    include ('config.php');

    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $nama_peminjam = $_POST['nama_peminjam'];

    $sql = "INSERT INTO data_buku (judul, genre, deskripsi, tgl_pinjam, tgl_kembali, nama_peminjam) VALUES ('$judul', '$genre', '$deskripsi', '$tgl_pinjam', '$tgl_kembali', '$nama_peminjam')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('Location: indexlogin.php?status=berhasil-baru');
    }
    else {
        header('Location: indexlogin.php?status=gagal-baru');
    }
?>