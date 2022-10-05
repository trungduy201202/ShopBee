<?php
session_start();
require 'db/connect.php';
$category = mysqli_query($conn, "SELECT * FROM category");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $id_cate = $_POST['id_cate'];
    $dess = $_POST['dess'];
    $price = $_POST['price'];
    $seller = $_POST['seller'];
    $place = $_POST['place'];
    $status = $_POST['status'];

    if ($_FILES['image']['error'] == 0) {
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'assets/img/' . $file_name);

        $sql = "INSERT INTO sanpham (name, dess, price, image, seller, place, status, id_cate) VALUES ('$name', '$dess', '$price', '$file_name', '$seller', '$place', $status, '$id_cate')";
        $query = mysqli_query($conn, $sql);
        if ($query) { ?>
            <?php echo "<script>alert('Thêm thành công!!!');window.location='listProduct.php'</script>";
        } else {
            echo 'Lỗi query!';
        }
    } else {
        echo "Upload lỗi!";
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
        <h1 class="title-add">Thêm Sản Phẩm</h1>
        <?php if (isset($alert['success'])) { ?>
            <p><?php echo $alert['success'] ?></p>
        <?php } ?>
        <form method="post" class="form-add" enctype="multipart/form-data">
            <div class="form_group">
                <label for="name">Tên Sản Phẩm</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form_group">
                <label for="name_cate">Tên Loại</label>
                <select name="id_cate" id="input" class="form_control" required="required">
                    <option value="">Tên Loại</option>
                    <?php foreach ($category as $key => $value) { ?>
                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name_cate']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form_group">
                <label for="dess">Mô Tả</label>
                <input type="text" name="dess" id="dess">
            </div>
            <div class="form_group">
                <label for="price">Giá</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="form_group">
                <label for="Image">Hình Ảnh</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form_group">
                <label for="seller">Người Bán</label>
                <input type="text" name="seller" id="seller">
            </div>
            <div class="form_group">
                <label for="place">Nơi Bán</label>
                <input type="text" name="place" id="place">
            </div>
            <div class="form_group">
                <label for="status">Trạng Thái</label>
                <div class="radio radio1">
                    <label for="place">
                        <input type="radio" name="status" id="status" value="1">
                        Hiện
                    </label>
                </div>
                <div class="radio">
                    <label for="place">
                        <input type="radio" name="status" id="status" value="0">
                        Ẩn
                    </label>
                </div>
            </div>
            <div class="form_group btn-group">
                <button type="submit" name="btn_add" id="btn_add" value="Thêm">Thêm</button>
            </div>
        </form>
    </div>
    <?php include "./base/footer.php"; ?>
</body>

</html>