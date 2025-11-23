<?php
include "connect.php";

if (isset($_POST['save'])) {

    $tensp   = $_POST['tensp'];
    $gia     = $_POST['gia'];
    $img     = $_POST['img'];
    $tonkho  = $_POST['tonkho'];
    $cpu     = $_POST['cpu'];
    $gpu     = $_POST['gpu'];
    $main     = $_POST['main'];
    $ram     = $_POST['ram'];
    $ssd     = $_POST['ssd'];
    $psu     = $_POST['psu'];
    $cooler  = $_POST['cooler'];
    $vocase  = $_POST['vocase'];

    /* LƯU DATABASE  */
    $sql = "INSERT INTO products (tensp, gia, img, tonkho, cpu, gpu, main, ram, ssd, psu, cooler, vocase)
            VALUES ('$tensp', '$gia', '$img', '$tonkho', '$cpu', '$gpu', '$main','$ram', '$ssd', '$psu', '$cooler', '$vocase')";

    if ($connect->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Thêm sản phẩm thất bại: " . $connect->error;
    }
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<div class="container">
    <h2>Thêm sản phẩm</h2>

    <form method="post" enctype="multipart/form-data">

        <label>Tên sản phẩm:</label>
        <input type="text" name="tensp" required>

        <label>Giá:</label>
        <input type="text" name="gia" required>

        <label>Ảnh sản phẩm:</label>
        <input type="text" name="img" required>

        <label>Số lượng tồn kho:</label>
        <input type="number" name="tonkho" required>

        <label>CPU:</label>
        <input type="text" name="cpu" required>

        <label>GPU:</label>
        <input type="text" name="gpu" required>

        <label>MAIN:</label>
        <input type="text" name="main" required>

        <label>RAM:</label>
        <input type="text" name="ram" required>

        <label>SSD:</label>
        <input type="text" name="ssd" required>

        <label>PSU:</label>
        <input type="text" name="psu" required>

        <label>Tản nhiệt:</label>
        <input type="text" name="cooler" required>

        <label>Vỏ case:</label>
        <input type="text" name="vocase" required>

        <button type="submit" name="save" class="add-btn">Lưu</button>
        <a href="index.php" class="reset-btn">Hủy</a>
    </form>
</div>

</body>
</html>
