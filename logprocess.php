<?php
    session_start();
    include('config.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' OR email='$email'
    AND password='$password'";
    $query = mysqli_query($connect, $sql);
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("Location: welcome.php?login-sukses");
    }
    else {
        header("Location: index.php?login-gagal");
    }
?>