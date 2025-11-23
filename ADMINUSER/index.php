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

$sql = "SELECT * FROM users WHERE username LIKE '%$search%' ORDER BY username $order";
$result = $connect->query($sql);
?>

<h2 class="title">QUẢN LÝ NGƯỜI DÙNG</h2>

<!-- Nút thêm -->
<a href="add.php" class="add-btn">+ Thêm nhân viên</a>

<!-- Tìm kiếm -->
<form method="get" class="search-box">
    <input type="text" name="search" placeholder="Nhập họ và tên..." value="<?= $search ?>">
    <button type="submit" class="search-btn">Tìm kiếm</button>
    <a href="index.php" class="reset-btn">Xóa tìm kiếm</a>
</form>

<!-- Sắp xếp -->
<div class="sort-box">
    Sắp xếp theo Họ tên: 
    <a href="index.php?order=asc" class="sort-link">A › Z</a> |
    <a href="index.php?order=desc" class="sort-link">Z › A</a>
</div>

<!-- Bảng dữ liệu -->
<table class="styled-table">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Hành động</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['password'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>" class="edit-btn">Sửa</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="delete-btn"
            onclick="return confirm('Xóa người dùng?')">Xóa</a>
        </td>


    </tr>
    <?php } ?>
</table>

<a href="http://localhost/ADMINSANPHAM/index.php">admin san pham</a>



</div>


<a></a>
</body>
</html>
