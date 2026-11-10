<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Thực hiện câu lệnh SELECT
$sql = "SELECT * FROM khachhang";
if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows ($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
               echo $row['makh'];
               echo $row['tenkh'];
               echo $row['namsinh'];
               echo $row['dienthoai'];
               echo $row['diachi'] . "<br>";
        }
//Giải phóng bộ nhớ của biến
           mysqli_free_result($result);
}
else
{
echo "No Records";
}
}
else{
echo "Truy vấn thất bại".mysqli_error($conn);
}
//Đóng kết nối
mysqli_close($conn);
?>
    