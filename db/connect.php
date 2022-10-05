<?php 
    $conn = mysqli_connect('localhost','root','','test');
    if (!$conn){
        die("Kết nối không thành công" . mysqli_connect_error());
    } else {
        // echo "Đã kết nối thành công";
    } 
?>