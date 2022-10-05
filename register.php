<?php
  require 'db/connect.php';
  $err = [];
  if(isset($_POST['submit-reg'])){
    $username = $_POST["username"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    if (empty($username)) {
        $err['username'] = 'Không được để trống username!';
    }
    if (empty($pass1)) {
        $err['pass1'] = 'Không được để trống password!';
    }
    if (empty($pass2)) {
      $err['pass2'] = 'Không được để trống password!';
    }
    if ($pass1 != $pass2) {
        $err['pass2'] = 'Mật khẩu không trùng khớp';
    }
    $pass1 = md5($pass1);
    if (empty($err)) {
    $sql = "INSERT INTO qltk (`username`, `password`) VALUES('$username', '$pass1')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Đăng ký thành công!!!');window.location='login.php'</script>";
    }
    else {
      $err['alert'] = "Tài khoản đã tồn tại! Vui lòng nhập lại tài khoản";
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
  <link rel="stylesheet" href="./assets/css/register.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
  <link rel="stylesheet" href="./assets/bootstrap-5.1.1-dist/bootstrap-5.1.1-dist/css/bootstrap.min.css">
</head>

<body>
  <div class="signup">
    <a href="index.php" class="logo-login">
      <img src="./assets/img/Trung Duy.png" alt="" class="img-login">
    </a>
    <h1 class="signup-heading">Đăng Ký<h1>
      <div>
        <form method="POST" class="signup-form" autocomplete="off" role="form">
          <div>
            <label for="fullname" class="signup-label">Tài Khoản</label>
            <input type="text" id="username" class="signup-input" placeholder="Nhập tài khoản" name="username">
            <div>
              <span class="form-message"><?php echo (isset($err['username'])) ? $err['username'] : '' ?></span>
            </div>
          </div>
          <div>
            <label for="email" class="signup-label">Mật Khẩu</label>
            <input type="password" id="pass1" class="signup-input" placeholder="Nhập mật khẩu" name="pass1">
            <div>
              <span class="form-message"><?php echo (isset($err['pass1'])) ? $err['pass1'] : '' ?></span>
            </div>
          </div>
          <div>
            <label for="email" class="signup-label">Xác Nhận Mật Khẩu</label>
            <input type="password" id="pass2" class="signup-input" placeholder="Nhập lại mật khẩu" name="pass2">
            <div>
              <span class="form-message"><?php echo (isset($err['pass2'])) ? $err['pass2'] : '' ?></span>
            </div>
          </div>
          <div>
              <span class="form-message"><?php echo (isset($err['alert'])) ? $err['alert'] : '' ?></span>
            </div>
          <button class="signup-submit" type="submit" name="submit-reg">Đăng Ký</button>
        </form>
      </div>
        <p class="signup-already">
          <span>Bạn đã có tài khoản?</span>
          <a href="login.php" class="signup-login-link">
            Đăng Nhập
          </a>
        </p>
  </div>
</body>

</html>