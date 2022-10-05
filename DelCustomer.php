<?php 
    require 'db/connect.php';
    $id = $_GET['id'];
    
    $sql = "DELETE FROM `qltk` WHERE `id` = '{$id}'";
    $rs = mysqli_query($conn, $sql);
    if($rs) { ?>
        <meta http-equiv="refresh" content="0; url=admin.php"/>
        // echo "Đã xoá thành công tài khoản";
   <?php } else {
        echo "lỗi";
    }
?>