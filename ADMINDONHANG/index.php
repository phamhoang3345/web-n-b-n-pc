<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">

<?php 
include 'connect.php'; 

$search = "";
$donhang = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

if (isset($_GET['order'])) {
    $order = $_GET['order'] == "desc" ? "DESC" : "ASC";
}

// SQL lấy đơn hàng
$sql = "
    SELECT * FROM donhang 
    WHERE ten LIKE '%$search%' 
    ORDER BY thoigiandat $donhang
";
$result = $connect->query($sql);
?>

<h2 class="title">QUẢN LÝ ĐƠN HÀNG</h2>

<!-- Tìm kiếm -->
<form method="get" class="search-box">
    <input type="text" name="search" placeholder="Nhập tên khách hàng..." value="<?= $search ?>">
    <button type="submit" class="search-btn">Tìm kiếm</button>
    <a href="index.php" class="reset-btn">Xóa tìm kiếm</a>
</form>

<!-- Sắp xếp -->
<div class="sort-box">
    Sắp xếp theo ngày đặt: 
    <a href="index.php?order=asc" class="sort-link">Cũ → Mới</a> |
    <a href="index.php?order=desc" class="sort-link">Mới → Cũ</a>
</div>

<!-- Bảng dữ liệu -->
<table class="styled-table">
    <tr>
        <th>Mã đơn</th>
        <th>Tên khách</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
        <th>Ngày đặt</th>
        <th>Hành động</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['ten'] ?></td>
        <td><?= $row['sdt'] ?></td>
        <td><?= $row['diachi'] ?></td>
        <td><?= $row['thoigiandat'] ?></td>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>" class="delete-btn"
                onclick="return confirm('Xóa đơn hàng này?')">Xóa</a>
        </td>
    </tr>
    <?php } ?>

</table>

<a href="http://localhost/ADMINCHITIETSANPHAM/index.php">↩ Admin chi tiết đơn hàng</a>

</div>

</body>
</html>
