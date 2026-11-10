<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "INSERT INTO khachhang VALUES('K011','Tran Hoa Phat','2006','00879565451','Bac Lieu')";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "Mẫu tin đã được thêm.";
} else
    {
        echo "Không thêm được";
    }
?>
