<?php
session_start();
require 'db/connect.php';
    if(isset($_POST['btn_add'])) {
        print_r($_POST);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $tinhthanh = $_POST['tinhthanh'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];

        $password = md5($password);
        $alert = array();

        $sql = "INSERT INTO `qltk`(`username`, `hoten`,`diachi`,`sdt`,`email`, `tinhthanh`, `gioitinh`, `namsinh`) VALUES ('$username', '$hoten', '$diachi','$sdt','$email', '$tinhthanh', '$gioitinh', '$namsinh')";
        $query = mysqli_query($conn, $sql);
        if($query){ ?>
            <?php echo "<script>alert('Thêm thành công!!!');window.location='admin.php'</script>";
        } else {
            echo 'mysqli_error()';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/AddCustomer.css">
</head>

<body>
    <?php include "./base/header-admin.php";?>
    <div class="wp-form-add">
        <h1 class="title-add">Thêm Khách Hàng</h1>
        <?php if (isset($alert['success'])) { ?>
            <p><?php echo $alert['success'] ?></p>
        <?php } ?>
        <form method="post" class="form-add">
            <div class="form_group">
                <label for="U
                sername">Tên người dùng</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form_group">
                <label for="Password">Mật Khẩu</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form_group">
                <label for="Hoten">Họ và tên</label>
                <input type="text" name="hoten" id="Name">
            </div>
            <div class="form_group">
                <label for="Address">Địa chỉ</label>
                <input type="text" name="diachi" id="Address">
            </div>
            <div class="form_group">
                <label for="SDT">Số điện thoại</label>
                <input type="text" name="sdt" id="SDT">
            </div>
            <div class="form_group">
                <label for="Email">Email</label>
                <input type="text" name="email" id="Email">
            </div>
            <div class="form_group">
                <label for="Tinhthanh">Tỉnh Thành</label>
                <input type="text" name="tinhthanh" id="tinhthanh">
            </div>
            <div class="form-group">
                <p>Giới Tính</p>
                <div class="gender">
                    <input type="radio" name="gioitinh" id="gioitinh" value="male" class="gender-radio">
                    <label for="male">Nam</label>
                    <input type="radio" name="gioitinh" id="gioitinh" value="female" class="gender-radio">
                    <label for="female">Nữ</label>
                </div>
            </div>
            <div class="form_group btn-group">
                <button type="submit" name="btn_add" id="btn_add" value="Thêm">Thêm</button>
            </div>
        </form>
    </div>
    <?php include "./base/footer.php";?>
</body>
</html>
