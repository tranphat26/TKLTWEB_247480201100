<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update dữ liệu</title>
</head>
<body>
   <form action="updatedata.php" method="post">
        Mã Khách Hàng:<input type="text" name="txtmakh" value=""><br>
        Tên Khách Hàng:<input type="text" name="txttenkh" value=""><br>
        <button type="submit">Update</button>
    </from>
    <h1> Hiển Thị </h1>
    <?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM khachhang";
if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows ($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
               echo $row['makh']." \ ";
               echo $row['tenkh']." \ ";
               echo $row['namsinh']." \ ";
               echo $row['dienthoai']." \ ";
               echo $row['diachi'] . "<br>";
        }

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

mysqli_close($conn);
?>
</body>
</html>