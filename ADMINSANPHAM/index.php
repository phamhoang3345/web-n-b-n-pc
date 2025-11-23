<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">

<?php include 'connect.php'; ?>

<?php
$search = "";
$order = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

if (isset($_GET['order'])) {
    $order = $_GET['order'] == "desc" ? "DESC" : "ASC";
}

$sql = "SELECT * FROM products WHERE tensp LIKE '%$search%' ORDER BY tensp $order";
$result = $connect->query($sql);
?>

<h2 class="title">QUẢN LÝ SẢN PHẨM</h2>

<!-- Nút thêm -->
<a href="add.php" class="add-btn">+ Thêm sản phẩm</a>

<!-- Tìm kiếm -->
<form method="get" class="search-box">
    <input type="text" name="search" placeholder="Nhập sản phẩm..." value="<?= $search ?>">
    <button type="submit" class="search-btn">Tìm kiếm</button>
    <a href="index.php" class="reset-btn">Xóa tìm kiếm</a>
</form>

<!-- Sắp xếp -->
<div class="sort-box">
    Sắp xếp theo: 
    <a href="index.php?order=asc" class="sort-link">A › Z</a> |
    <a href="index.php?order=desc" class="sort-link">Z › A</a>
</div>

<!-- Bảng dữ liệu -->
<table class="styled-table">
    <tr>
        <th>tên sản phẩm</th>
        <th>giá</th>
        <th>ảnh</th>
        <th>tồn kho</th>
        <th>cpu</th>
        <th>gpu</th>
        <th>main</th>
        <th>ram</th>
        <th>ssd</th>
        <th>psu</th>
        <th>tản nhiệt</th>
        <th>vỏ case</th>
        <th>hành động</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['tensp'] ?></td>
        <td><?= $row['gia'] ?></td>
        <td><?= $row['img'] ?></td>
        <td><?= $row['tonkho'] ?></td>
        <td><?= $row['cpu'] ?></td>
        <td><?= $row['gpu'] ?></td>
        <td><?= $row['main'] ?></td>
        <td><?= $row['ram'] ?></td>
        <td><?= $row['ssd'] ?></td>
        <td><?= $row['psu'] ?></td>
        <td><?= $row['cooler'] ?></td>
        <td><?= $row['vocase'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="edit-btn">Sửa</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="delete-btn"
            onclick="return confirm('Xóa người dùng?')">Xóa</a>
        </td>


    </tr>
    <?php } ?>
</table>

</div>


<a></a>
</body>
</html>
