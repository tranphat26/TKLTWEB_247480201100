
<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Không kết nối:".mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8mb4");
$makh="";
$tenkh="";
//lấy giá trị POST từ from vừa submit
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txtmakh"])){
        $makh=$_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"])){
        $tenkh=$_POST['txttenkh'];
    }
    $sql = "UPDATE khachhang SET tenkh='$tenkh' WHERE makh='$makh'";
$result = mysqli_query ($conn, $sql);
if ($result){
    echo "<script>window.location.href='update.php';</script>";
}else
    {
        echo "Không thêm được";
    }
}
mysqli_close($conn);
?>