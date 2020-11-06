<?php 
    include ('config.php');

    if( !isset($_GET['id_buku']) ){
        header('Location: listbuku.php');
    }

    $id_buku = $_GET['id_buku'];
    $sql = 'DELETE FROM data_buku WHERE id_buku = '.$id_buku;
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: listbuku.php?status=berhasil-delete');
    }
    else {
        header('Location: listbuku.php?status=gagal-delete');
    }
?>