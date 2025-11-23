<?php
include "connect.php";

// Kiểm tra ID
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

// Lấy dữ liệu sản phẩm
$sql = "SELECT * FROM products WHERE id = $id";
$result = $connect->query($sql);

if ($result->num_rows == 0) {
    echo "Không tìm thấy sản phẩm!";
    exit;
}

$data = $result->fetch_assoc();

// Xử lý cập nhật
if (isset($_POST['update'])) {

    $tensp   = $_POST['tensp'];
    $gia     = $_POST['gia'];
    $img     = $_POST['img'];  // ảnh dạng text
    $tonkho  = $_POST['tonkho'];
    $cpu     = $_POST['cpu'];
    $gpu     = $_POST['gpu'];
    $main    = $_POST['main'];
    $ram     = $_POST['ram'];
    $ssd     = $_POST['ssd'];
    $psu     = $_POST['psu'];
    $cooler  = $_POST['cooler'];
    $vocase  = $_POST['vocase'];

    $sql = "UPDATE products SET
            tensp='$tensp',
            gia='$gia',
            img='$img',
            tonkho='$tonkho',
            cpu='$cpu',
            gpu='$gpu',
            main='$main',
            ram='$ram',
            ssd='$ssd',
            psu='$psu',
            cooler='$cooler',
            vocase='$vocase'
            WHERE id=$id";

    if ($connect->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Cập nhật thất bại: " . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h2>Sửa sản phẩm</h2>

    <form method="post">

        <label>Tên sản phẩm:</label>
        <input type="text" name="tensp" value="<?= htmlspecialchars($data['tensp']) ?>" required>

        <label>Giá:</label>
        <input type="text" name="gia" value="<?= htmlspecialchars($data['gia']) ?>" required>

        <label>Ảnh (dạng text):</label>
        <input type="text" name="img" value="<?= htmlspecialchars($data['img']) ?>" required>

        <label>Số lượng tồn kho:</label>
        <input type="number" name="tonkho" value="<?= htmlspecialchars($data['tonkho']) ?>" required>

        <label>CPU:</label>
        <input type="text" name="cpu" value="<?= htmlspecialchars($data['cpu']) ?>" required>

        <label>GPU:</label>
        <input type="text" name="gpu" value="<?= htmlspecialchars($data['gpu']) ?>" required>

        <label>Main:</label>
        <input type="text" name="main" value="<?= htmlspecialchars($data['main']) ?>" required>

        <label>RAM:</label>
        <input type="text" name="ram" value="<?= htmlspecialchars($data['ram']) ?>" required>

        <label>SSD:</label>
        <input type="text" name="ssd" value="<?= htmlspecialchars($data['ssd']) ?>" required>

        <label>PSU:</label>
        <input type="text" name="psu" value="<?= htmlspecialchars($data['psu']) ?>" required>

        <label>Tản nhiệt:</label>
        <input type="text" name="cooler" value="<?= htmlspecialchars($data['cooler']) ?>" required>

        <label>Vỏ case:</label>
        <input type="text" name="vocase" value="<?= htmlspecialchars($data['vocase']) ?>" required>

        <button type="submit" name="update" class="add-btn">Cập nhật</button>
        <a href="index.php" class="reset-btn">Hủy</a>

    </form>
</div>

</body>
</html>
