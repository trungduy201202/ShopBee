<?php
@session_start();
require 'db/connect.php';
if (isset($_POST['submit-log'])) {
    $err = array();
    if (empty($_POST['username'])) {
        $err['username'] = "Không được để trống Username";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $err['password'] = "Không được để trống Password";
    } else {
        $password = md5($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT * FROM `qltk` WHERE `username` ='$username' AND `password` = '$password'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        if ($username = $data['username']) {
            if ($password = $data['password']) {
                if ($data['level'] == 1) {
                    $_SESSION['login-admin'] = true;
                    $_SESSION['username'] = $data['username'];
                    header('location: admin.php');
                } else if ($data['level'] == 0) {
                    $_SESSION['login-user'] = true;
                    $_SESSION['username'] = $data['username'];
                    header('location: index.php');
                }
            }
        } else {
            $err['alert'] = "Tài khoản hoặc mật khẩu không chính xác!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.1-dist/bootstrap-5.1.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="signin">
        <a href="index.php" class="logo-login">
            <img src="./assets/img/Trung Duy.png" alt="" class="img-login">
        </a>
        <h1 class="signin-heading">Đăng Nhập<h1>
        <form method="POST" action="" class="signin-form" autocomplete="off">
            <label class="signin-label">Tài Khoản</label>
            <input type="text" id="account" class="signin-input" placeholder="Nhập tài khoản" name="username">
            <div class="form-message">
                <span><?php if (!empty($err['username'])) echo $err['username'] ?> </span>
            </div>
            <label class="signin-label">Mật Khẩu</label>
            <input type="password" id="password" class="signin-input" placeholder="Nhập mật khẩu" name="password">
            <div class="form-message">
                <span><?php if (!empty($err['password'])) echo $err['password'] ?> </span>
            </div>
            <div class="form-message">
                <span><?php if (!empty($err['alert'])) echo $err['alert'] ?> </span>
            </div>
            <button class="signin-submit" type="submit" name="submit-log">Đăng Nhập</button>
        </form>
        <p class="signin-already">
            <span>Bạn chưa có tài khoản?</span>
            <a href="register.php" class="signin-login-link">
                Đăng Ký
            </a>
        </p>
    </div>
</body>
</html>