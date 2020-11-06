<?php 
    include ('config.php');

    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $nama_peminjam = $_POST['nama_peminjam'];

    $sql = 
    "UPDATE data_buku SET 
    judul = '".$judul."',
    genre = '".$genre."',
    deskripsi = '".$deskripsi."',
    tgl_pinjam = '".$tgl_pinjam."',
    tgl_kembali = '".$tgl_kembali."',
    nama_peminjam = '".$nama_peminjam."'
    WHERE id_buku = ".$id_buku;

//    echo $sql;

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: listbuku.php?status=berhasil-edit');
    }
    else{
        header('Location: listbuku.php?status=gagal-edit');
    }
?>