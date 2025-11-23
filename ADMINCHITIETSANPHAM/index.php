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
    SELECT * FROM chitietdonhang WHERE 1 ";

    if (!empty($search)) {
    $sql .= " AND (order_id LIKE '%$search%' 
                OR product_id LIKE '%$search%'
                OR soluong LIKE '%$search%'
                OR gia LIKE '%$search%')";
}
$result = $connect->query($sql);
?>

<h2 class="title">QUẢN LÝ ĐƠN HÀNG</h2>

<!-- Tìm kiếm -->
<form method="get" class="search-box">
    <input type="text" name="search" placeholder="Nhập id đơn hàng..." value="<?= $search ?>">
    <button type="submit" class="search-btn">Tìm kiếm</button>
    <a href="index.php" class="reset-btn">Xóa tìm kiếm</a>
</form>

<!-- Bảng dữ liệu -->
<table class="styled-table">
    <tr>
        <th>order_id</th>
        <th>product_id</th>
        <th>Số lượng</th>
        <th>Gía</th>
        <th>Hành động</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['order_id'] ?></td>
        <td><?= $row['product_id'] ?></td>
        <td><?= $row['soluong'] ?></td>
        <td><?= $row['gia'] ?></td>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>" class="delete-btn"
                onclick="return confirm('Xóa đơn hàng này?')">Xóa</a>
        </td>
    </tr>
    <?php } ?>

</table>

<a href="http://localhost/ADMINDONHANG/index.php">↩ Admin đơn hàng</a>
<a href="http://localhost/ADMINSANPHAM/index.php">↩ Admin sản phẩm</a>

</div>

</body>
</html>
