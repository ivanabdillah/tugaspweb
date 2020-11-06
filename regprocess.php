<?php 
    include ('config.php');

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (nama, email, username, password)
    VALUES ('$nama', '$email', '$username', '$password')";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('Location: login.php?status=berhasil-register');
    }
    else {
        header('Location: register.php?status=gagal-register');
        echo "Register Gagal";
    }
?>