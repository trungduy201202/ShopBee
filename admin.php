<?php
session_start();
require 'db/connect.php';
$sql = "SELECT * FROM `qltk`";
$rs = mysqli_query($conn, $sql);
$list_account = array();

if (mysqli_num_rows($rs) > 0) {
    while ($row = mysqli_fetch_array($rs)) {
        $list_account[] = $row;
    }
}

// echo "<pre>";
// print_r($list_account);
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
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "./base/header-admin.php";
    ?>
    <div class="wp_content">
        <div class="wp_content_left">
            <nav class="category">
                <h3 class="category-heading">
                    <i class="category-heading__icon fas fa-list-ul"></i>
                    Danh Mục
                </h3>
                <ul class="category-list">
                    <li class="category-item category-item--active">
                        <a href="admin.php" class="category-item__link">Danh Sách Tài Khoản</a>
                    </li>
                    <li class="category-item">
                        <a href="listProduct.php" class="category-item__link">Danh Sách Sản Phẩm</a>
                    </li>
                    <li class="category-item">
                        <a href="" class="category-item__link">Danh Sách Đơn Hàng</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="wp_content_right">
        <div class="div-header-khachhang">
                <div class="text-danhsachkhachhang">
                    <h4>DANH SÁCH TÀI KHOẢN</h4>
                </div>

            </div>
            <div class="div-thaotac">
                <div class="div-thaotac-tren">
                    <div class="div-them">
                        <a class="them-moi" href="AddCustomer.php"><i class="fas fa-plus"></i> Thêm mới</a>
                    </div>
                    <div class="div-timkiem-khachhang">
                        <div class="wrap-admin">
                            <form action="" class="search-admin" method="post">
                                <input type="text" class="searchTerm-admin" placeholder="Nhập thông tin cần tìm...">
                                <button type="submit" class="searchButton-admin">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="div-thaotac-duoi">
                    <div class="del-khachhang">
                        <a class="them-moi" href="">Xóa mục đã chọn</a>
                    </div>
                    <div class="div_tb_khachhang">
                        <form method="post">
                            <table class="tb_khachhang">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>STT</th>
                                        <th>Id user</th>
                                        <th>Tên người dùng</th>
                                        <th>Họ và tên</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Tỉnh Thành</th>
                                        <th>Giới Tính</th>
                                        <th>Năm Sinh</th>
                                        <th colspan="2">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $temp = 0;
                                    foreach ($list_account as $item) {
                                    $temp++;?>
                                    <tr>
                                        <td class="td1"><input type="checkbox" name="" value=""></td>
                                        <td><?php echo $temp?></td>
                                        <td><?php echo $item['id']?></td>
                                        
                                        <td><?php echo $item['username'] ?></td>
                                        <td><?php echo $item['hoten'] ?></td>
                                        <td><?php echo $item['diachi'] ?></td>
                                        <td><?php echo $item['sdt'] ?></td>
                                        <td><?php echo $item['email'] ?></td>
                                        <td><?php echo $item['tinhthanh'] ?></td>
                                        <td><?php echo $item['gioitinh'] ?></td>
                                        <td><?php echo $item['namsinh'] ?></td>
                                        <td class="td7"><a href="DelCustomer.php?id=<?php echo $item['id']?>"><i class="fas fa-trash-alt xoa"></i></a></td>
                                        <td class="td8"><a href="UpdateCustomer.php?id=<?php echo $item['id']?>"><i class="fas fa-edit xoa"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "./base/footer.php";
    ?>
</body>
</html>

<?php
    
?>