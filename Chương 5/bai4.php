<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính toán số học</title>
    <style></style>
</head>
<body>

<div class="khung">
    <h2>TÍNH TOÁN SỐ HỌC</h2>

    <form method="post">
        <label>Số thứ 1:</label>
        <input type="text" name="a" step="any"
               value="<?php echo $_POST['a'] ?? ''; ?>" required>
        <br>

        <label>Số thứ 2:</label>
        <input type="text" name="b" step="any"
               value="<?php echo $_POST['b'] ?? ''; ?>" required>
        <br>

        <label>Kết quả:</label>
        <input type="text" readonly
               value="<?php echo htmlspecialchars((string)($kq ?? '')); ?>">
        <br>

        <button type="submit" name="pheptinh" value="cong">Cộng</button>
        <button type="submit" name="pheptinh" value="tru">Trừ</button>
        <button type="submit" name="pheptinh" value="nhan">Nhân</button>
        <button type="submit" name="pheptinh" value="chia">Chia</button>
        <button type="submit" name="pheptinh" value="mod">Mod</button>
    </form>
</div>

<?php
if (isset($_POST['pheptinh'], $_POST['a'], $_POST['b'])) {
    $a = (float) $_POST['a'];
    $b = (float) $_POST['b'];
    $pheptinh = $_POST['pheptinh'];
    $kq = '';

    switch ($pheptinh) {
        case 'cong':
            $kq = $a + $b;
            break;

        case 'tru':
            $kq = $a - $b;
            break;

        case 'nhan':
            $kq = $a * $b;
            break;

        case 'chia':
            $kq = ($b != 0) ? $a / $b : 'Khong the chia cho 0';
            break;

        case 'mod':
            $kq = ($b != 0 && floor($a) == $a && floor($b) == $b)
                ? (int)$a % (int)$b
                : 'Mod can hai so nguyen, so thu 2 khac 0';
            break;
    }

    // Chuyển kết quả sang lần hiển thị tiếp theo
    echo '<script>
        document.querySelector("input[readonly]").value = '
        . json_encode((string)$kq) . ';
    </script>';
}
?>

</body>
</html>
