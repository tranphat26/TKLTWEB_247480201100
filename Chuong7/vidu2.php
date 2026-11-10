<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT makh, tenkh FROM khachhang"; 
$result = mysqli_query($conn, $sql); 
while ($row = mysqli_fetch_assoc($result))
{
echo("Ma khach hang: ".$row['makh']."),  (Họ tên: ".$row['tenkh']."<br/>");
}
mysqli_free_result($result);
mysqli_close($conn);
?>