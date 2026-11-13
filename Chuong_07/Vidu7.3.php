<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO khachhang VALUES ('K011', 'Lương Hoàng Phúc', '2006', '123456789', 'Bạc Liêu')";
$result = mysqli_query ($conn, $sql);
if ($result){
    echo "Mẫu tin đã được thêm.";
}else
    {
        echo "Không thêm được";
    }
?>