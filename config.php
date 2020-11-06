<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "peminjaman_buku");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
//$db_connection = mysqli_connect($server, $user, $password, $database);

if (!$connect) {
    die('Database gagal terkoneksi: ' . mysqli_connect_error());
}
//else {
//    print('Database berhasil terkoneksikan');
//}
?>