<?php
session_start();
require 'db/connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = mysqli_query($conn, "SELECT * FROM sanpham WHERE id = $id");
    $pro = mysqli_fetch_assoc($product);
}
$category = mysqli_query($conn, "SELECT * FROM category");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $id_cate = $_POST['id_cate'];
    $dess = $_POST['dess'];
    $price = $_POST['price'];
    $seller = $_POST['seller'];
    $place = $_POST['place'];
    $status = $_POST['status'];

    if (empty($_FILES['image']['name'])) {
        $image = $pro['image'];
    } else {
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'assets/img/' . $file_name);
        $image = $file_name;
    }

    $sql = "UPDATE sanpham SET name = '$name', id_cate = '$id_cate', dess = '$dess', price = '$price', image = '$image', seller = '$seller', place = '$place', status = '$status' WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) { ?>
        <?php echo "<script>alert('Cập nhật thành công!!!');window.location='listProduct.php'</script>";
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
    <link rel="stylesheet" href="./assets/css/addProduct.css">
</head>

<body>
    <?php include "./base/header-admin.php"; ?>
    <div class="wp-form-add">
        <h1 class="title-add">Sửa Sản Phẩm</h1>
        <?php if (isset($alert['success'])) { ?>
            <p><?php echo $alert['success'] ?></p>
        <?php } ?>
        <form method="post" class="form-add" enctype="multipart/form-data">
            <div class="form_group">
                <label for="id">Id Sản Phẩm</label>
                <label for="id"><?php echo $pro['id'] ?></label>
            </div>
            <div class="form_group">
                <label for="name">Tên Sản Phẩm</label>
                <input type="text" name="name" id="name" value="<?php echo $pro['name'] ?>">
            </div>
            <div class="form_group">
                <label for="name_cate">Tên Loại</label>
                <select name="id_cate" id="input" class="form_control" required="required">
                    <?php foreach ($category as $key => $value) { ?>
                        <option value="<?php echo $value['id'] ?>" <?php echo ($value['id'] == $pro['id_cate']) ? 'selected' : '' ?>><?php echo $value['name_cate']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form_group">
                <label for="dess">Mô Tả</label>
                <input type="text" name="dess" id="dess" value="<?php echo $pro['dess'] ?>">
            </div>
            <div class="form_group">
                <label for="price">Giá</label>
                <input type="text" name="price" id="price" value="<?php echo $pro['price'] ?>">
            </div>
            <div class="form_group">
                <label for="Image">Hình Ảnh</label>
                <input type="file" name="image" id="image">
                <img src="assets/img/<?php echo $pro['image'] ?>" width="50px" alt="<?php echo $pro['name'] ?>"></img>
            </div>
            <div class="form_group">
                <label for="seller">Người Bán</label>
                <input type="text" name="seller" id="seller" value="<?php echo $pro['seller'] ?>">
            </div>
            <div class="form_group">
                <label for="place">Nơi Bán</label>
                <input type="text" name="place" id="place" value="<?php echo $pro['place'] ?>">
            </div>
            <div class="form_group">
                <label for="status">Trạng Thái</label>
                <div class="radio radio1">
                    <label for="place">
                        <input type="radio" name="status" id="status" value="1" <?php echo ($pro['status'] == 1) ? 'checked' : '' ?>>
                        Hiện
                    </label>
                </div>
                <div class="radio">
                    <label for="place">
                        <input type="radio" name="status" id="status" value="0" <?php echo ($pro['status'] == 0) ? 'checked' : '' ?>>
                        Ẩn
                    </label>
                </div>
            </div>
            <div class="form_group btn-group">
                <button type="submit" name="btn_edit" id="btn_add" value="Sửa">Sửa</button>
            </div>
        </form>
    </div>
    <?php include "./base/footer.php"; ?>
</body>

</html>