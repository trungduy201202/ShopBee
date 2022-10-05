<?php 
    require 'db/connect.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM `sanpham` WHERE `id` = '{$id}'";
    $rs = mysqli_query($conn, $sql);
    if($rs) { ?>
        <meta http-equiv="refresh" content="0; url=listProduct.php"/>
        // echo "Đã xoá thành công tài khoản";
   <?php } else {
        echo "lỗi";
    }
?>