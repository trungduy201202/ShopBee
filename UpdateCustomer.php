<?php
session_start();
require 'db/connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `qltk` WHERE `id`=$id";
    $query = mysqli_query($conn, $sql);
    $info_acc = mysqli_fetch_array($query);

    if(isset($_POST['btn_edit'])) {
        $name = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $tinhthanh = $_POST['tinhthanh'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];

        $sql = "UPDATE `qltk` SET `hoten`='$name',`diachi`='$diachi',`sdt`='$sdt',`email`='$email', `tinhthanh`='$tinhthanh', `gioitinh`='$gioitinh',`namsinh`='$namsinh' WHERE `id` = '$id'";
        $query = mysqli_query($conn, $sql);
        if ($query) { ?>
            <?php echo "<script>alert('Cập nhật thành công!!!');window.location='admin.php'</script>";
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
    <title>Sửa</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/AddCustomer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <?php
        include "./base/header-admin.php"
    ?>
    <div class="wp-form-add">
        <h1 class="title-add">Sửa Khách Hàng</h1>
        <?php if (isset($alert['success'])) { ?>
            <p><?php echo $alert['success'] ?></p>
        <?php } ?>
        <form method="post" class="form-add">
            <div class="form_group">
                <label for="id">Id</label>
                <label for="id"><?php echo $info_acc['id'] ?></label>
            </div>
            <div class="form_group">
                <label for="username">Tên người dùng</label>
                <label for="username"><?php echo $info_acc['username'] ?></label>
            </div>
            <div class="form_group">
                <label for="level">Level</label>
                <input type="text" name="hoten" id="Name" value="<?php echo $info_acc['level'] ?>">
            </div>
            <div class="form_group">
                <label for="Username">Họ và tên</label>
                <input type="text" name="hoten" id="Name" value="<?php echo $info_acc['hoten'] ?>">
            </div>
            <div class="form_group">
                <label for="Address">Địa chỉ</label>
                <input type="text" name="diachi" id="Address" value="<?php echo $info_acc['diachi'] ?>">
            </div>
            <div class="form_group">
                <label for="SDT">Số điện thoại</label>
                <input type="text" name="sdt" id="SDT" value="<?php echo $info_acc['sdt'] ?>">
            </div>
            <div class="form_group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email" value="<?php echo $info_acc['email'] ?>">
            </div>
            <div class="form_group">
                <label for="Tinhthanh">Tỉnh Thành</label>
                <input type="text" name="tinhthanh" id="tinhthanh" value="<?php echo $info_acc['tinhthanh'] ?>">
            </div>
            <div class="form_group">
                <label for="Gioitinh">Giới Tính</label>
                <div class="gender">
                    <input <?php if(isset($info_acc['gioitinh']) && $info_acc['gioitinh'] == 'male') echo "checked = 'checked'"; if(isset($_POST['gioitinh']) && $_POST['gioitinh'] == "male") echo "checked = 'checked'" ?> type="radio" name="gioitinh" id="gioitinh" value="male" class="gender-radio">
                    <label for="male">Nam</label>
                    <input <?php if(isset($info_acc['gioitinh']) && $info_acc['gioitinh'] == 'female') echo "checked = 'checked'"; if(isset($_POST['gioitinh']) && $_POST['gioitinh'] == "female") echo "checked = 'checked'" ?> type="radio" name="gioitinh" id="gioitinh" value="female" class="gender-radio">
                    <label for="female">Nữ</label>
                </div>
            </div>
            <div class="form_group">
                <label for="Namsinh">Năm Sinh</label>
                <input type="date" name="namsinh" id="namsinh" value="<?php echo $info_acc['namsinh'] ?>">
            </div>
            <div class="form_group btn-group">
                <button type="submit" name="btn_edit" id="btn_add" value="Thêm">Sửa</button>
                <a href="changePasswordAdmin.php?id=<?php echo $info_acc["id"]?>" name="btn_edit" id="btn_change-pass" value="Thêm">Đổi mật khẩu</a>
            </div>
        </form>
    </div>
    <?php
        include "./base/footer.php"
    ?>
</body>
</html>