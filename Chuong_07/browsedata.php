

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
$tenkh="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["txttenkh"])){
        $tenkh=mysqli_real_escape_string($conn, $_POST['txttenkh']);
    }
}
    $sql= "SELECT * FROM khachhang WHERE tenkh='$tenkh'";
if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows ($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
            echo $row['makh'].' \ ';
            echo $row['tenkh'].' \ ';
            echo $row['namsinh'].' \ ';
            echo $row['dienthoai'].' \ ';
            echo $row['diachi'] . "<br>";
        }
        
        mysqli_free_result($result);
    }
    else{
        echo"Không tìm thấy khách hàng nào có tên:". $tenkh;
    }
}else{
    echo"lỗi truy vấn:".mysqli_error($conn);
}
           mysqli_close($conn);
?>