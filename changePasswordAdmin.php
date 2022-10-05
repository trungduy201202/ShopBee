<?php
    @session_start();
    require 'db/connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `qltk` WHERE `id`= '$id'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    // echo $data['password'];
    $err = array();
    if (isset($_POST['btn_signin'])) {
        // echo md5($_POST['password']);
        if(empty($_POST['password2'])) {
            $err['password2'] = "Vui lòng nhập mật khẩu mới";
        } else {
            $new_pw = $_POST['password2'];
        }
    
        if(empty($_POST['password3'])) {
            $err['password3'] = "Vui lòng nhập lại mật khẩu mới";
        } else {
            $cf_pw = $_POST['password3'];
        }
    
        if(isset($new_pw) && isset($cf_pw) && $new_pw != $cf_pw) {
            $err['alert'] = "Nhập lại mật khẩu không chính xác.";
        } else {
            $new_pw = md5($_POST['password2']);
            // echo $new_pw;
        }
    
        if (empty($err)) { {
                $alert = array();
                $sql = "UPDATE `qltk` SET `password`='$new_pw' WHERE `id` = '$id'";
                $query = mysqli_query($conn, $sql);
                if ($query) { ?>
                    <!-- <meta http-equiv="refresh" content="0; url=password.php"> -->
        <?php
                    $alert['success'] = "Đã thêm dữ liệu mới!";
                } else {
                    echo 'mysqli_error()';
                }
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
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Document</title>
    
</head>

<body>
    <?php include "./base/header-admin.php";?>
    <div class="app">
        <form method="POST" role="form">
            <div class="text-table-signin"><b>ĐỔI MẬT KHẨU</b></div>
            <div class="form_group">
                <label class="username-tt" for="username">Tên đăng nhập</label>
                <label class="ip-tt" id="username"><?php echo $data['username']?></label>
            </div>
            <div>
                <input class="input-table-login" type="password" name="password" placeholder="Nhập mật khẩu cũ">
                <div class="has-error">
                    <span><?php echo (isset($err['password'])) ? $err['password'] : '' ?> </span>
                </div>
            </div>
            <div>
                <input class="input-table-login" type="password" name="password2" placeholder="Nhập mật khẩu mới">
                <div class="has-error">
                    <span><?php echo (isset($err['password2'])) ? $err['password2'] : '' ?> </span>
                </div>
            </div>
            <div>
                <input class="input-table-login" type="password" name="password3" placeholder="Nhập lại mật khẩu mới">
                <div class="has-error">
                    <span><?php echo (isset($err['password3'])) ? $err['password3'] : '' ?> </span>
                    <span><?php if (isset($err['alert'])) echo $err['alert'] ?> </span>
                </div>
            </div>

            <input class="bt_dangnhap" type="submit" name="btn_signin" value="Cập nhật"> 
            <br>
            <span><?php if (isset($alert['success'])) echo $alert['success'] ?> </span>
        </form>
    </div>
    <?php include "./base/footer.php";?>
</body>

</html>