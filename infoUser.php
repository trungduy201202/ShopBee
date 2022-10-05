<?php
    @session_start();
    require 'db/connect.php';
    $uname = $_SESSION['username'];
    $sql = "SELECT * FROM `qltk` WHERE `username` = '$uname'";
    $query = mysqli_query($conn, $sql);
    $info_acc = mysqli_fetch_array($query);

    if(isset($_POST['btn-save'])) {
        
        // $userid = !empty($_POST['id'])?$_POST['id']:false;
        // $hoten = !empty($_POST['hoten'])?$_POST['hoten']:false;
        // $diachi = !empty($_POST['diachi'])?$_POST['diachi']:false;
        // $sdt = !empty($_POST['sdt'])?$_POST['sdt']:false;
        // $email = !empty($_POST['email'])?$_POST['email']:false;
        // $tinhthanh = !empty($_POST['tinhthanh'])?$_POST['tinhthanh']:false;
        // $gioitinh = !empty($_POST['gioitinh'])?$_POST['gioitinh']:false;
        // $namsinh =!empty($_POST['namsinh'])?$_POST['namsinh']:false;

        // if(isset($_POST['gioitinh'])){
        //     $gioitinh = $_POST['gioitinh'];
        // }

        // // $alert = array();
        
        // $sql = "UPDATE qltk SET id='$userid',hoten='$hoten',diachi='$diachi',sdt='$sdt',email='$email', tinhthanh='$tinhthanh', gioitinh='$gioitinh', namsinh='$namsinh' WHERE id = '$userid'";
        // $query = mysqli_query($conn, $sql);
        // if($query){ 
       
        // } 
        // else {
        //     echo 'mysqli_error()';
        // }
        $username = $uname;
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $tinhthanh = $_POST['tinhthanh'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $alert = array();

        $sql = "UPDATE `qltk` SET `hoten`='$hoten',`diachi`='$diachi',`sdt`='$sdt',`email`='$email',`tinhthanh` = '$tinhthanh', `gioitinh`='$gioitinh', `namsinh`='$namsinh' WHERE `username` = '$username'";
        $query = mysqli_query($conn, $sql);
        if ($query) { ?>
            <?php
                echo "<script>alert('Đăng ký thành công!!!');window.location='infoUser.php'</script>"
            ?>
            <meta http-equiv="refresh" content="0; url=infoUser.php">
        <?php
            $alert['success'] = "Đã thêm dữ liệu mới!";
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
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/infoUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <?php include "./base/header.php";?>
    <h1 class="title-info_user">Tài Khoản Của Tôi</h1>
    <form method="POST" action="">
      <div class="contentform">
        <div class="leftcontact">
            <div class="form-group">
                <p>Tên người dùng<span>*</span></p>
                <span class="icon-case"><i class="fa fa-user"></i></span>
                <label for="" class="input-text" id="username"><?php echo $_SESSION['username'] ?></label>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Họ Và Tên <span>*</span></p>
                <span class="icon-case"><i class="fa fa-user"></i></span>
                <input type="text" name="hoten" id="hoten" class="input-text" value="<?php echo $info_acc['hoten'] ?>"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Giới Tính <span>*</span></p>
                <span class="icon-case" for="gioitinh"><i class="fas fa-venus-mars"></i></span>
                <div class="gender">
                    <input <?php if(isset($info_acc['gioitinh']) && $info_acc['gioitinh'] == 'male') echo "checked = 'checked'"; if(isset($_POST['gioitinh']) && $_POST['gioitinh'] == "male") echo "checked = 'checked'" ?> type="radio" name="gioitinh" id="gioitinh" value="male" class="gender-radio">
                    <label for="male">Nam</label>
                    <input <?php if(isset($info_acc['gioitinh']) && $info_acc['gioitinh'] == 'female') echo "checked = 'checked'"; if(isset($_POST['gioitinh']) && $_POST['gioitinh'] == "female") echo "checked = 'checked'" ?> type="radio" name="gioitinh" id="gioitinh" value="female" class="gender-radio">
                    <label for="female">Nữ</label>
                </div>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Ngày / Tháng / Năm sinh <span>*</span></p>
                <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                <input type="date" name="namsinh" id="namsinh" class="input-text" value="<?php echo $info_acc['namsinh'] ?>"/>
                <div class="validation"></div>
            </div>
        </div>
  
        <div class="rightcontact">
            <div class="form-group">
                <p>Địa Chỉ <span>*</span></p>
                <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                <input type="text" name="diachi" id="diachi" class="input-text" value="<?php echo $info_acc['diachi'] ?>"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Tỉnh / Thành Phố <span>*</span></p>
                <span class="icon-case"><i class="fa fa-building-o"></i></span>
                <input type="text" name="tinhthanh" id="tinhthanh" class="input-text" value="<?php echo $info_acc['tinhthanh'] ?>"/>
                <div class="validation"></div>
            </div>
            
            <div class="form-group">
                <p>Email <span>*</span></p>
                <span class="icon-case"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" id="email" class="input-text" value="<?php echo $info_acc['email'] ?>"/>
                <div class="validation"></div>
            </div>
  
            <div class="form-group">
                <p>Số Điện Thoại <span>*</span></p>
                <span class="icon-case"><i class="fa fa-phone"></i></span>
                <input type="text" name="sdt" id="sdt" class="input-text" value="<?php echo $info_acc['sdt'] ?>"/>
                <div class="validation"></div>
            </div>
        </div>
      </div>
        <button type="submit" class="button-contact" name="btn-save">Lưu</button>
    </form>
    <?php include "./base/footer.php";?>
</body>
</html>